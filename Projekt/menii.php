<div id="menii">
<nav class="meni">
	<div class="logo">
		<a href="index.php"><img src="sova.jpg" /></a>
	</div>
		<ul>
		<?php if(isset($_SESSION["id"])){ ?>
				
				<li><a href="index.php">Početna stranica</a></li>
				
				<li><a href="filtar.php">Filtriraj</a></li>
				
				<li><a href="stat.php">Statistika</a></li>
				

				<?php if(isset($_SESSION["tip"]) && ($_SESSION["tip"]) != 2) { ?>
				
				<li id="meni_ziv"><a href="dodavanje_zivotinje.php">Dodaj novu životinju</a></li>
				
				<li><a href="moderator_stranica.php">Moderator stranica</a></li>
				
				<?php } ?>
				
		<?php } ?>
		
		<?php if(isset($_SESSION["tip"]) && $_SESSION["tip"] == 0) { ?>
		
				<li><a href="admin.php">Admin stranica</a></li>
				
				<li><a href="registracija.php">Registracija</a></li>
				
		
		<?php } ?>

		<?php if(!isset($_SESSION["id"])){ ?>
		<div id="meni_prijava">
			<li><a href="prijava.php">Prijava</a></li>
			
		<?php } else { ?>
		
			<li><a href="prijava.php?odjava=1">Odjava</a></li>
		</div>

		<?php } ?>
		</ul>	
</nav>
</div>