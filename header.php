<div class="header">
	<a href="." class="logo">Luna's fabrik</a>
	<div class="header-right">
		<a class="header-link" href="basket.php">Mon panier (<?= $basket['size'] ?>)</a>
		
		<?php session_start();?>
		<?php 
		// print_r($_SESSION);
		
		if($_SESSION[userid] !== null && $_SESSION[userid] !== "" && $_SESSION[username] !== null && $_SESSION[username] !== "") {?>
			<a class="header-link" href="index.php">Bonjour
	    <?php echo $_SESSION[username]; } else {?></a>
			<a class="header-link" href="login.php">Connexion</a>
		<?php } ?>



		<a href="https://www.facebook.com/manbiospherefrance/" target="_blank">
			<img src="image/icone/facebook.png" alt="lien facebook"/>
		</a>

	</div>
</div>