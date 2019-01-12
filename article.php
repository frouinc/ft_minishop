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
			<div class="main article-main">
				<div class="article-image-container">
					<img class="article-image" src="https://picsum.photos/500/400" />
				</div>
				<div class="article-body-container">
					<h2>Article name</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut porttitor leo. Maecenas tincidunt mauris ligula, consequat blandit ligula rhoncus eget. Nunc quis bibendum massa. Morbi semper felis id ante pulvinar, non euismod ipsum porttitor. Nunc aliquet dictum mattis. Sed laoreet ultricies nisi, ut dignissim dui dapibus ut. Etiam eu justo iaculis, accumsan mauris malesuada, fringilla justo. Nullam sit amet purus pellentesque, congue dui a, luctus quam. Sed malesuada augue sapien, nec pretium tellus placerat quis. Curabitur condimentum ante sit amet placerat semper. Vivamus luctus fermentum tellus, ut scelerisque justo vulputate nec. Phasellus vel nisl in libero auctor egestas. Nulla facilisi. Aenean eget sapien ex. Nulla rhoncus purus magna, eget pulvinar neque vehicula eu. Nullam vitae felis a magna consequat vulputate in et mauris.

						Quisque vel velit condimentum, rutrum mauris at, dictum odio. Donec at pellentesque metus. Sed et iaculis elit. In vel faucibus leo. Nam turpis massa, aliquam ac volutpat nec, volutpat et eros. Nam vitae pharetra magna. Morbi sed risus a quam euismod cursus. Morbi non rutrum tortor. Vivamus porta et sapien in fermentum. Morbi finibus velit id tortor euismod, quis gravida orci efficitur. Morbi eget volutpat velit. Phasellus eget ligula in risus accumsan venenatis sed ut risus. Suspendisse porta pulvinar enim sed posuere. Integer ultrices tempor enim, ut fermentum lacus rutrum a. In maximus ac sem id ultrices.
					</p>
				</div>
				<div class="article-price-container">
					<form class="article-form">
						<div class="article-price">
							5000.00 €
						</div>
						<div class="form-group">
							<label>Quantity : </label>
							<input type="number" name="quantity" />
						</div>
						<div>
							<input type="submit" value="Add to basket" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include("footer.php") ?>
	</div>
</body>
</html>