<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_GET['id']) || $_GET['id'] === "" || !is_numeric($_GET['id'])) {
	header('Location: .');
}

$isAdding = false;
if (isset($_POST['quantity']) && is_numeric($_POST['quantity'])) {
	$isAdding = true;

	$quantity = intval($_POST['quantity']);
	for ($i = 0; $i < $quantity; $i++) {
		$_SESSION['basket'][] = intval($_GET['id']);
	}
}

$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'ft_minishop');
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


// Get article
$article = null;
$sql = "SELECT * FROM article WHERE id = ?";
$result = mysqli_query($conn, $sql);

$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, "i", $_GET['id']);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);
	$article = mysqli_fetch_array($result);

	mysqli_stmt_close($stmt);
}

if (!$article) {
	header('Location: .');
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

mysqli_close($conn);

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
					<form class="article-form" method="post" action="article.php?id=<?= $_GET['id'] ?>">
						<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
						<div class="article-price">
							<?= $article['price'] ?> €
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