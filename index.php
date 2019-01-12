<!DOCTYPE html>
<html>
<head>
	<title>ft_minishop</title>
	<link rel="stylesheet" type="text/css" href="ft_minishop.css">
</head>
<body>
	<div class="vwrapper">
		<?php include("header.php") ?>
		<div class="middle">
			<div class="side">
				<ul class="category-list">
					<li><a href="#">Category 1</a></li>
					<li><a href="#">Category 2</a></li>
					<li><a href="#">Category 3</a></li>
					<li><a href="#">Category 4</a></li>
					<li><a href="#">Category 5</a></li>
				</ul>
			</div>
			<div class="main home-articlelist">
				<?php for ($i = 0; $i < 8; $i++) { ?>
					<div class="home-article">
						<a href="article.php?id=<?= $i ?>" target="_blank" class="home-article-link">
							<div class="article-picture">
								<img src="https://picsum.photos/150/150" />
							</div>
							<div class="article-body">
								<h3>ARTICLE <?= $i ?></h3>
								<p>
									5000.00€
								</p>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php include("footer.php") ?>
	</div>
</body>
</html>