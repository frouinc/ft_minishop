<div class="header">
	<a href="." class="logo">Luna's fabrik</a>
	<div class="header-right">
		<a class="header-link" href="basket.php">
			Mon panier <?php $count = 0; if (isset($_SESSION['basket'])) foreach ($_SESSION['basket'] as $basketArticle) {
				$count += $basketArticle;
			}
			echo "($count)";
			?>
		</a>

		<?php
		if($_SESSION['userid'] !== null && $_SESSION['userid'] !== "" && $_SESSION['username'] !== null && $_SESSION['username'] !== "") {?>
			<a class="header-link" href="index.php">Bonjour
	    <?php echo $_SESSION['username']; } else {?></a>
			<a class="header-link" href="login.php">Connexion</a>
		<?php } ?>

		<?php
		if($_SESSION['userid'] !== null && $_SESSION['userid'] !== "" && $_SESSION['username'] !== null && $_SESSION['username'] !== "") {
			unset($_SESSION['userid']);
			unset($_SESSION['username']);
			?>
			<a class="header-link" href="index.php">Déconnexion</a>
		<?php } ?>


		<a href="https://www.facebook.com/manbiospherefrance/" target="_blank">
			<img src="image/icone/facebook.png" alt="lien facebook"/>
		</a>
	</div>
</div>