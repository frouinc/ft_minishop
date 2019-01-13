<?php

session_start();

require('initdb.php');

// Get all articles
$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);

$articles = [];
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$articles[] = $row;
	}
}

// Get all categories
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

$categories = [];
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$categories[] = $row;
	}
}

?>

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
					<?php foreach ($categories as $category) { ?>
						<li><a href="?category=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="main home-articlelist">
				<?php foreach ($articles as $article) { ?>
					<div class="home-article">
						<a href="article.php?id=<?= $article['id'] ?>" class="home-article-link">
							<div class="article-picture">
								<img src="<?= $article['image'] ?>" />
							</div>
							<div class="article-body">
								<h3><?= $article['name'] ?></h3>
								<p>
									<?= $article['price'] ?> €
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