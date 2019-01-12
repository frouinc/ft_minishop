<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'ft_minishop');
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

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
			<?php include("admin_sidebar.php") ?>
			<div class="main admin-list">
				<table class="admin-sales-table">
					<tr>
						<th>Action</th>
						<th>Id</th>
						<th>Name</th>
					</tr>
					<?php foreach ($categories as $category) { ?>
						<tr>
							<td>
								<img class="icon" src="https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png" />
								<img class="icon" src="https://cdn3.iconfinder.com/data/icons/objects/512/Bin-512.png" />
							</td>
							<td><?= $category['id'] ?></td>
							<td><?= $category['name'] ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<?php include("../footer.php") ?>
	</div>
</body>
</html>