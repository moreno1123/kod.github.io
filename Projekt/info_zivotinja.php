<?php

	session_start();

?>


<!DOCTYPE html>
<html lang = "hr">
<head>
<title>Divlje životinje</title>
<meta name="author" content="Moreno Franjković"/>
<meta name="datum" content="<?php echo date("H:i:s d.m.Y")?>"/>
<meta charset="UTF-8"/>

<link type="text/css" rel="stylesheet" href="stil.css"/>

</head>
	<nav>
		<?php include "menii.php"; ?>
	</nav>
<body>

	<br>
<section>

<?php echo date("H:i:s d.m.Y"); ?><br>
<?php

	include_once("bazaa.php");
	$indeks=$_GET["id"];
	$veza = spojiSeNaBazu();
	$upit = "SELECT * FROM `zivotinja` WHERE zivotinja_id='{$indeks}'";
	$rez = izvrsiUpit($veza, $upit);
	$prikazi = mysqli_fetch_assoc($rez);
			
?>

	<div class="container center">
	
<?php if(isset($prikazi)){ ?>
		
			<h2><?php echo ($prikazi["naziv"]) ?><h2>
				<p><img src="<?php echo ($prikazi["slika"]) ?>"></p>
			<h3>Opis: </h3>
				<p><?php echo ($prikazi["opis"]) ?></p>
				<p>Datum i vrijeme dodavanja: <?php echo ($prikazi["datum_vrijeme_dodavanja"]) ?></p>
				<?php if (isset($_SESSION["tip"]) && $_SESSION["tip"] == 0){ ?>
				<p>Životinja ID: <?php echo ($prikazi["zivotinja_id"]) ?></p>
				<p>Korisnik ID: <?php echo ($prikazi["korisnik_id"]) ?></p>
		<?php } ?>		
		<?php }  ?>
		
	</div>
			
<?php
			
	$veza = spojiSeNaBazu();
	$upit = "SELECT * FROM `zivotinje_na_lokaciji` WHERE zivotinja_id='{$indeks}'";
	$rezz = izvrsiUpit($veza, $upit);
			
?>
	<h4 style="margin-bottom: 0px;">Lokacija: </h4>
<?php
		if(isset($rezz)){
			while($prikazi = mysqli_fetch_array($rezz)){ 
				$upit = "SELECT * FROM `lokacija` WHERE lokacija_id='{$prikazi["lokacija_id"]}'"; 
				$rezzz = izvrsiUpit($veza, $upit);
				
				if(isset($rezzz)){ 
					while($prikazi = mysqli_fetch_assoc($rezzz)){
						echo"<tr><br>";   
						echo"<td>"; ?> 
							<a class="veza" href='popis_lokacija.php?idd=<?php echo ($prikazi["lokacija_id"]) ?>'>
								<?php echo($prikazi["naziv"]) ?>
							</a>
					<?php echo"</td>"; ?> 
					<?php echo"<td>"; ?> 
					<?php if(isset($_SESSION["tip"]) && $_SESSION["tip"] == 0){ ?>
							<p>Lokacija ID: <?php echo ($prikazi["lokacija_id"]) ?></p>
					<?php echo"</td>"; ?>
					<?php echo"</tr>";
							} 
					} 
				} 
			} 
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