<?phpsession_start();?>

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
	session_start();
	include"bazaa.php";
	$veza = spojiSeNaBazu();
	$upit = "SELECT * FROM lokacija WHERE lokacija_id";
	$rezultat_lokacija = izvrsiUpit($veza, $upit);

?>
	<form name="forma" method="post" action="rezultat.php">
		<label for="lokacija"><strong>Lokacija: </strong></label><br>
		<select name="lokacija">
			<?php 
			
			while($lokacija = mysqli_fetch_assoc($rezultat_lokacija)){
				echo"<option value='{$lokacija["lokacija_id"]}'>{$lokacija["naziv"]}</option>";
			}	
			
			?>
	</select><br>
	
	<label for="datum">Filtriraj od: </label>
	<input pattern="\d{1-2}.\d{1-2}.\d{4} \d{1-2}:\d{1-2}:\d{1-2}" name="datum" type="text" value=""  min="2020.10.01 10:00:00" max="" placeholder="dd.mm.gggg hh:mm:ss"  />
	<br>
	<label></label>
	<label for="vrijeme">Filtriraj do: </label>
	<input name="vrijeme" type="text" value="" min="2020.10.01 10:00:00" max="" placeholder="dd.mm.gggg hh:mm:ss" pattern="\d{1-2}.\d{1-2}.\d{4} \d{1-2}:\d{1-2}:\d{1-2}"/>
	<br>
	<input class="pok" name="submit" type="submit" value="Filtriraj" href="rezultat.php"><br>
	
	<input class="pok" id="reset" type="reset" name="reset" value="Resetiraj"><br>
	
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







































