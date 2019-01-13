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
		<a class="header-link" href="login.php">Connexion</a>
		<a href="https://www.facebook.com/manbiospherefrance/" target="_blank">
			<img src="image/icone/facebook.png" alt="lien facebook"/>
		</a>
	</div>
</div>