<?php

		session_start();
		include_once("bazaa.php");
		$veza = spojiSeNaBazu();
		$id=$_GET["id"];
		$upit = "SELECT *FROM lokacija";
		$rezultat = izvrsiUpit($veza, $upit);

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
		<table	border="1">
			<caption><b>Popis svih moderatora sa zaduženosti</b></caption>
				<thead>
					<tr>
						<th>Moderator ID</th>
						<th>Ime moderatora</th>
						<th>Zaduženost po lokaciji</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(isset($rezultat)){
							while($rezultat_lokacija=mysqli_fetch_array($rezultat)){
								$upit = "SELECT *FROM korisnik WHERE korisnik_id='{$rezultat_lokacija["moderator_id"]}'";
								$rezultatt = izvrsiUpit($veza, $upit);
									while($rezultat_mod=mysqli_fetch_array($rezultatt)){
										echo"<tr>";
										echo"<td>{$rezultat_lokacija["moderator_id"]}</td>";
										echo"<td>{$rezultat_mod["ime"]}</td>";
										echo"<td>{$rezultat_lokacija["naziv"]}</td>";
										echo"</tr>";
									}	
							}
						}
					
					?>
				</tbody>
		</table><br><br>
		<?php
		
				$upit = "SELECT * FROM korisnik WHERE NOT EXISTS (SELECT *FROM lokacija WHERE korisnik.korisnik_id=lokacija.moderator_id) AND korisnik.tip_id='1'";
				$rrezultat = izvrsiUpit($veza, $upit); ?>
					<table border="1">
						<caption><b>Popis svih moderatora bez zaduženosti</b></caption>
							<thead>
								<tr>
									<th>Korisnik ID</th>
									<th>Tip ID</th>
									<th>Korisničko ime</th>
									<th>Lozinka</th>
									<th>Ime</th>
									<th>Prezime</th>
									<th>E-mail</th>
									<th>Slika</th>
								</tr>
							</thead>
						<tbody>
					<?php 
						if(isset($rrezultat)){
							while($prikazi=mysqli_fetch_array($rrezultat)){
								echo"<tr>";
								echo"<td>{$prikazi[0]}</td>";
								echo"<td>{$prikazi[1]}</td>";
								echo"<td>{$prikazi[2]}</td>";
								echo"<td>{$prikazi[3]}</td>";
								echo"<td>{$prikazi[4]}</td>";
								echo"<td>{$prikazi[5]}</td>";
								echo"<td>{$prikazi[6]}</td>";
								echo"<td>";?> <img src="<?php echo ($prikazi["slika"]) ?>"><?php echo"</td>";
								echo"</tr>";
							}
							
						}
					?>
				
				</tbody>
			</table> 
<?php

		$upit = "SELECT *FROM lokacija WHERE lokacija_id='{$id}'";
		$rezultattt = izvrsiUpit($veza, $upit);
		$rezultat_ispis = mysqli_fetch_assoc($rezultattt);
			
			if(isset($_POST["submit"])){
				$greska = "";
				$poruka = "";
				$moderator_id = $_POST["moderator_id"];
				$lokacija = $_POST["lokacija"];
				
					if(!isset($moderator_id) || empty($moderator_id)){
						$greska .= "Niste unijeli moderator ID! <br>";
					
					}
				
					if(!isset($lokacija) || empty($lokacija)){
						$greska .= "Niste unijeli lokaciju! <br>";
					}
					
					if(empty($greska)){
						$poruka = "Kreirali ste račun! <br>";
						$upit="UPDATE lokacija SET moderator_id='{$moderator_id}', naziv='{$lokacija}' WHERE lokacija_id = '{$id}'";
						izvrsiUpit($veza, $upit);	
						$poruka = "Podaci su ažurirani pod ključem: $id";
					}

			}
?>
			<br><br>
			<form method="post">
				<label for="moderator_id">Moderator ID: </label>
				<input name="moderator_id" type="text" value="<?php echo $rezultat_ispis["moderator_id"] ?>"/>
				<br>
				
				<label for="lokacija">Naziv lokacije: </label>
				<input name="lokacija" type="text" value="<?php echo $rezultat_ispis["naziv"] ?>"/>
				<br><br>
				
				<input class="pok" name="submit" type="submit" value="Unesi" />
				<input class="pok" name="submit" type="reset" value="Inicijaliziraj" />
				<br>
			</form>

		
	
	
	</section>
</body>

<footer>
	<p>
		<small>
			<a href="o_autoru.html" style="color: white;">M. Franjković  2020&copy; </a>
		</small>
	</p>
</footer>