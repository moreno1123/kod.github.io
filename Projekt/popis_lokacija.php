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
		<?php include "menii.php"; ?>
	</nav>
<body>

	<section>

<?php 

	include"bazaa.php";
	$veza = spojiSeNaBazu();
	$indeks=$_GET["idd"];
	$upit = "SELECT * FROM `zivotinje_na_lokaciji` WHERE `lokacija_id`='{$indeks}'";
	$rez = izvrsiUpit($veza, $upit);

		if(isset($rez)){ 
			while($prikazi = mysqli_fetch_assoc($rez)){ 
				$upit = "SELECT * FROM `zivotinja` WHERE `zivotinja_id`='{$prikazi["zivotinja_id"]}'";
				$rezz = izvrsiUpit($veza, $upit);
				
					if(isset($rezz)){ 
						while($prikazii = mysqli_fetch_assoc($rezz)){ 
						?>
							
						<table border="1" align="">
								
					<?php	echo"<tr><br>";?>
					<?php	echo"<td>"; ?>
									
								<a href='info_zivotinja.php?id=<?php echo $prikazii["zivotinja_id"] ?>'>
									<?php echo($prikazii["naziv"]) ?>
								</a>
										
					<?php	echo"</td>"; ?>
					<?php	echo"</tr>"; ?>
								
						</table>
								
					<?php
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