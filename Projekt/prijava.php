<?php

session_start();
if(isset($_GET["odjava"])){
	unset($_SESSION["id"]);
	unset($_SESSION["ime"]);
	unset($_SESSION["prezime"]);
	unset($_SESSION["tip"]);
	session_destroy();

}

include_once("bazaa.php");
$veza = spojiSeNaBazu();

	if(isset($_POST["submit"])){
		$greska = "";
		$korime = $_POST["korime"];
		if(isset($korime) && !empty($korime) && isset($_POST["lozinka"]) && !empty($_POST["lozinka"])){
			$upit = "SELECT * FROM korisnik 
			WHERE korisnicko_ime='{$korime}'
			AND lozinka = '{$_POST["lozinka"]}'";
			$rezultat = izvrsiUpit($veza, $upit);
			$prijava = false;
			while($red = mysqli_fetch_array($rezultat)){
				$prijava = true;
				$_SESSION["id"]=$red[0];
				$_SESSION["ime"]=$red["ime"];
				$_SESSION["prezime"]=$red["prezime"];
				$_SESSION["tip"]=$red["tip_id"];
				
			}
			
			if($prijava){
				header("Location: index.php");
				exit();
			}
			else{
				$greska = "Korisničko ime i lozinka se ne podudaraju!";
			}
			
		}
		else{
				$greska = "Korisničko ime i/ili lozinka nisu uneseni!";
			}
 	}
	
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
		<?php include"menii.php";?>
	</nav>
<body>
		<section>
		<h2>Prijava korisnika</h2>
			<h3>Forma za prijavu</h3>
			<form id="prijava" name="prijava" method="post" action="prijava.php">
				<label for="korime">Korisničko ime: </label>
				<input name="korime" type="text" />
				<br>
				<label for="lozinka">Lozinka: </label>
				<input name="lozinka" type="password" />
				<br>
				<input class="pok" name="submit" type="submit" value="unesi">
				<input class="pok" id="reset" type="reset" name="reset" value="Inicijaliziraj">
			</form>
				<div>
				<?php 
					if(isset($greska)){
						echo "<p style ='color:red'>$greska</p>";
					} 
					if(isset($poruka)){
					echo "<p style ='color:green'>$poruka</p>";
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
