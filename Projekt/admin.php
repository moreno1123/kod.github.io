<?php

	session_start();


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
		<?php include"menii.php"; ?>
	</nav>
<body>
<section>
	
<?php

	
	if(!isset($_SESSION["id"])){
		header("Location: prijava.php");
	}
	elseif($_SESSION["tip"] != 0){
		header("Location: index.php");
	}
	echo"Dobro došli na admin stranice " . $_SESSION["ime"] . " " . $_SESSION["prezime"];
	echo"<br> Danas je " . date("d.m.Y H:i:s");
	
?>

<?php

		include_once("bazaa.php");
		$veza = spojiSeNaBazu();
		$upit = "SELECT *FROM korisnik";
		$rezultat = izvrsiUpit($veza, $upit);
	
?>
					
			<form id="prikaz_korisnika" name="prikaz_korisnika" method="post" action="admin.php" >	
		
				<input method="post" class="pok" name="submit" type="submit" value="Tablica korisnika" ><br>
				<input method="post" class="pok" name="submit" type="hidden" value="<?php ?>" />
						
			</form>			
			<form id="prikaz_lokacija" name="prikaz_lokacija" method="post" action="admin.php" >	
		
				<input method="post" class="pok" name="submitt" type="submit" value="Lokacije" ><br>
				<input method="post" class="pok" name="submitt" type="hidden" value="<?php ?>" />
						
			</form>
			<form id="prikaz_bez_lokacije" name="prikaz_bez_lokacije" method="post" action="admin.php" >	
		
				<input method="post" class="pok" name="submittt" type="submit" value="Životinje bez lokacije" ><br>
				<input method="post" class="pok" name="submittt" type="hidden" value="<?php ?>" />
						
			</form>
			<form id="registracija" name="registracija" method="post" action="registracija.php" >	
		
				<input method="post" class="pok" name="ssubmit" type="submit" value="Registracija novog korisnika" ><br>
				<input method="post" class="pok" name="ssubmit" type="hidden" value="<?php ?>" />
						
			</form>

<?php if(isset($_POST["submit"])){ ?>
	
			<table border="1">
				<caption><b>Ispis unesenih korisnika</b></caption>
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
							<th>Ažuriraj</th>
						</tr>
					</thead>
				<tbody>
					<?php 
						if(isset($rezultat)){
							while($red=mysqli_fetch_array($rezultat)){
								echo"<tr>";
								echo"<td>{$red[0]}</td>";
								echo"<td>{$red[1]}</td>";
								echo"<td>{$red[2]}</td>";
								echo"<td>{$red[3]}</td>";
								echo"<td>{$red[4]}</td>";
								echo"<td>{$red[5]}</td>";
								echo"<td>{$red[6]}</td>";
								echo"<td>";?> <img src="<?php echo ($red["slika"]) ?>"><?php echo"</td>";
								echo"<td><a href='editiranje_korisnika.php?id={$red[0]}'>Ažuriraj</a></td>";
								echo"</tr>";
							}
							
						}
					?>
				
				</tbody>
			</table> 
<?php } ?>

<?php

		$upit = "SELECT *FROM lokacija";
		$rezultat = izvrsiUpit($veza, $upit);
		
	
?>	
	
<?php if(isset($_POST["submitt"])){ ?>
		
			<table border="1">
				<caption><b>Lokacije</b></caption>
					<thead>
						<tr>
							<th>Moderator ID</th>
							<th>Naziv moderatora</th>
							<th>Lokacija ID</th>
							<th>Naziv lokacije</th>
							<th>Ažuriraj</th>
						</tr>
					</thead>
				<tbody>
					<?php 
						if(isset($rezultat)){
							while($red=mysqli_fetch_array($rezultat)){
								$upit = "SELECT *FROM korisnik WHERE korisnik_id='{$red["1"]}'";
								$rezultat_mod = izvrsiUpit($veza, $upit);
								while($mod=mysqli_fetch_array($rezultat_mod)){
									echo"<tr>";
									echo"<td>{$red["1"]}</td>";
									echo"<td>{$mod["ime"]}</td>";
									echo"<td>{$red[0]}</td>";
									echo"<td>{$red["2"]}</td>";
									echo"<td><a href='editiranje_lokacije.php?id={$red[0]}'>Ažuriraj</a></td>";
									echo"</tr>";
								}	
							}
							
						}
					?>
				
				</tbody>
			</table> 
<?php } ?>

<?php

		$upit = "SELECT * FROM zivotinja WHERE zivotinja_id NOT IN ( SELECT zivotinja_id FROM zivotinje_na_lokaciji);";
		$rezultat = izvrsiUpit($veza, $upit);
	
?>	


<?php if(isset($_POST["submittt"])){ ?>
		
			<table border="1">
				<caption><b>Životinje bez lokacije</b></caption>
					<thead>
						<tr>
							<th>Životinja ID</th>
							<th>Korisnik ID</th>
							<th>Naziv</th>
							<th>Slika</th>
							<th>Ažuriraj</th>
							<th>Ukloni</th>
						</tr>
					</thead>
				<tbody>
					<?php 
						if(isset($rezultat)){
							while($red=mysqli_fetch_array($rezultat)){
								echo"<tr>";
								echo"<td>{$red[0]}</td>";
								echo"<td>{$red["1"]}</td>";
								echo"<td>{$red["naziv"]}</td>";
								echo"<td>";?> <img src="<?php echo ($red["slika"]) ?>"><?php echo"</td>";
								echo"<td><a href='editiranje_bez_lokacije.php?id={$red[0]}'>Ažuriraj</a></td>";
								echo"<td>";?>			
								
								<form id="ukloni_zivotinju" name="ukloni_zivotinju" method="post" action="admin.php" >	
		
									<input method="post" class="pok" name="submitttt" type="submit" value="Ukloni" ><br>
									<input method="post" class="pok" name="submitttt" type="hidden" value="<?php echo $red[0] ?>" />
						
								</form>
						<?php 	echo"</td>";
								echo"</tr>";
							}
							
						}
					?>
				
				</tbody>
			</table> 
<?php } ?>
	
<?php 
	if(isset($_POST["submitttt"])){ 
		
		$ukloni = $_POST["submitttt"];
		$upit = "DELETE FROM `zivotinja` WHERE `zivotinja`.`zivotinja_id` ='{$ukloni}'";
		$rezultat = izvrsiUpit($veza, $upit);

	} 
?>




	
</section>
</body>

<footer>
	<p>
		<small>
			<a href="o_autoru.html" style="color: white;">M. Franjković  2020&copy; </a>
		</small>
	</p>
</footer>