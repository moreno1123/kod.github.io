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
	$veza = spojiSeNaBazu();

				
			$vrijeme = strtotime($_POST['datum']);
			$vrijemee = date('Y-m-d H:i:s', $vrijeme);
		
			$vvrijeme = strtotime($_POST['vrijeme']);
			$vrijemeee = date('Y-m-d H:i:s', $vvrijeme);
		
		$filtar = $_POST["lokacija"];
		$od = $vrijemee;
		$do = $vrijemeee;
		$upit = "SELECT * FROM zivotinja z, zivotinje_na_lokaciji l WHERE z.zivotinja_id=l.zivotinja_id AND l.lokacija_id='{$filtar}' 
		AND  datum_vrijeme_dodavanja BETWEEN '{$od}' AND '{$do}' ";
		$rezultat_zivotinja = izvrsiUpit($veza, $upit);
			
		
			while($prikazi = mysqli_fetch_assoc($rezultat_zivotinja)){
				$vrijeme = strtotime($prikazi["datum_vrijeme_dodavanja"]);
				$vrijeme = date('d.m.Y H:i:s', $vrijeme);
				echo"<tr><br>";
				echo"<td>Zivotinja id: {$prikazi["zivotinja_id"]}</td><br>";
				echo"<td>Naziv: {$prikazi["naziv"]}</td><br>";
				echo"<td>Datum i vrijeme dodavanja: {$vrijeme}</td><br>";
				echo"<td>Slika: " ?><img src="<?php echo $prikazi["slika"]; ?>"> <?php echo"</td><br>";
				echo"</tr>";
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