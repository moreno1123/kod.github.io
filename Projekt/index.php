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
		<?php include "menii.php";?>
	</nav>
<body>
	<section><br><br>
		
		
		
		<br><br>
		
<?php
			
	include_once("bazaa.php");
	$veza = spojiSeNaBazu();
	$upit = "SELECT * FROM zivotinja WHERE datum_vrijeme_dodavanja BETWEEN '2020-10-01 10:00:00' AND NOW()";
	$rezultat_slika = izvrsiUpit($veza, $upit);
			
		if(isset($rezultat_slika)){
			while($prikazi = mysqli_fetch_array($rezultat_slika)){ ?>
				<table border="1" align=""><?php
					echo "<tr><br>"; 
					echo "<td>"; ?> 
						<a href='info_zivotinja.php?id=<?php echo $prikazi[0] ?>'>
							<img src ="<?php echo $prikazi["slika"] ?>">
						</a> <?php 
					echo "</td>";
					echo "<td>{$prikazi["naziv"]}</td>";
					echo "</tr>";?>
				</table><?php
			}
		}
			
?>
		
	</section>
</body>

<footer>
		<small>
			<a href="o_autoru.html" style="color: white;">M. Franjković  2020&copy; </a>
		</small>
</footer>
