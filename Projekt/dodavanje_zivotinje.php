<?php

	session_start();
	include_once("bazaa.php");
	$veza = spojiSeNaBazu();
	$id_nova_zivotinja="";
	
		if(isset($_POST["submit"])){
			$greska = "";
			$poruka = "";
			$naziv = $_POST["naziv"];
			
			$opis = $_POST["opis"];
			$slika = $_POST["slika"];
			$vrijeme = date("Y-m-d H:i:s");
			$id = $_SESSION["id"];
			
			if(!isset($naziv) || empty($naziv)){
				$greska .= "Niste unijeli naziv životinje! <br>";
			}

			if(!isset($opis) || empty($opis)){
				$greska .= "Dodajte opis! <br>";
			}
			if(!isset($slika) || empty($slika)){
				$greska .= "Prinesite sliku putem url-a! <br>";
			}
			if(!isset($_POST["lokacija"]) || empty($naziv) || empty($opis) || empty($slika)){
				$greska .= "Odaberi lokaciju! <br>";
				
			}
			

			
			if(empty($greska)){
				$upit="INSERT INTO zivotinja (korisnik_id, datum_vrijeme_dodavanja, naziv, opis, slika)
				VALUES ({$id}, '{$vrijeme}', '{$naziv}', '{$opis}', '{$slika}')";
				izvrsiUpit($veza, $upit);	
				$id_nova_zivotinja = mysqli_insert_id($veza);
				$poruka = "Unesena je nova životinja pod ključem: $id_nova_zivotinja";
				}
				
 
			if (isset($_POST["lokacija"]) AND empty($greska)){
				foreach($_POST["lokacija"] as $kljuc => $vrijednost){
					if($_POST["lokacija"][$kljuc]){
						$lokacija = $_POST["lokacija"][$kljuc];
					
						$upit= "INSERT INTO zivotinje_na_lokaciji (zivotinja_id, lokacija_id, admin)
						VALUES($id_nova_zivotinja, $lokacija, 0)";
						izvrsiUpit($veza, $upit);
						
					}
				}
			}
		}
		
		$upit = "SELECT *FROM zivotinja";
		$rezultat = izvrsiUpit($veza, $upit);
	
	
		zatvoriVezuNaBazu($veza);

?>


<!DOCTYPE html>
<html lang="hr">
	<head>
		<title>Divlje životinje</title>
		<meta name="author" content="Moreno Franjković">
		<meta name="datum" content="6.2.2021.">
		<meta charset="UTF-8">
		
		<link type="text/css" rel="stylesheet" href="stil.css"/>
	</head>
	<nav>
		<?php include "menii.php";?>
	</nav>
<body>


	<section>
			<h2>Forma za dodavanje nove životinje: </h2>
		<form id="nova_zivotinja" name="prijava" method="post" action="">
		
			<label for="naziv">Naziv životinje: </label>
			<input name="naziv" type="text" />
			<br>
			<label for="lokacija">Izaberi lokaciju: </label>
			<input name="lokacija[]" type="checkbox" value="3"/>Amazona
			<input name="lokacija[]" type="checkbox" value="4"/>Antartika
			<input name="lokacija[]" type="checkbox" value="1"/>Costa Rica
			<input name="lokacija[]" type="checkbox" value="2"/>Sahara
			<br>
			
			<label for="opis">Opis: </label>
			<input name="opis" type="text" />
			<br>
			
			<label for="slika">Slika: </label>
			<input name="slika" type="text" />
			<br>
			
			<input class="pok" name="submit" type="submit" value="Unesi" />
			<br>
			<input class="pok" id="reset" type="reset" name="reset" value="Inicijaliziraj"><br>
			
		</form>
		<div>
			<?php 
			
			if(isset($greska)){
				echo "<p style ='color:red'>$greska</p>";
			} 
			if(isset($poruka)){
				echo "<p style ='color:green'>$poruka</p>";
				echo "<p style ='color:white'>$vrijeme</p>";
			} 
			
		?>
		</div>
	</section>
</body>


<footer>
	<p>
		<small>
			<a href="o_autoru.html" style="color: white;">M. Franjković  2020&copy; </a>
		</small>
	</p>
</footer>