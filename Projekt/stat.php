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

<section>
	<?php  
		include"bazaa.php";
		$upit = "SELECT l.naziv as lokacija, COUNT(*) as broj_zivotinja FROM zivotinje_na_lokaciji z, lokacija l WHERE z.lokacija_id=l.lokacija_id GROUP BY l.lokacija_id ORDER BY l.naziv";
		$veza = spojiSeNaBazu();
		$rezultat = izvrsiUpit($veza, $upit);
			
		if(isset($rezultat)){
		 while($prikazi=mysqli_fetch_assoc($rezultat)){
			echo"<tr><br>";   
			echo"<td>"; ?> 
				<a class="veza" href='popis_lokacija.php?idd=<?php 
						switch ($prikazi["lokacija"]) {
							case 'Amazona':
								echo '3';
								break;
							case 'Antartika';
								echo'4';
								break;
							case 'Costa Rica';
								echo'1';
								break;
							case 'Sahara';
								echo'2';
								break;
						}
				?>'><button>
					<?php echo($prikazi["lokacija"]) ?>
				</button></a>
			<?php echo"</td><br>"; 
			echo"<td>Broj životinja: {$prikazi["broj_zivotinja"]}</td><br>";
			echo"</tr>";
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