<?php

include("initdb.php")

// Get all articles
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

$user = [];
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$articles[] = $row;
	}
}

// select du user
$sql = "SELECT * FROM user WHERE";
$result = mysqli_query($conn, $sql);


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
			<div class="main login-main">

				<div class="login-container half-column split-right">
					<h2>SE CONNECTER</h2>
					<form method="post" action="login_connect.php">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" />
						</div>
						<div class="form-group">
							<input type="submit" value="Connection" />
						</div>
					</form>
				</div>

				<div class="register-container half-column">
					<h2>CREER SON COMPTE</h2>
					<form method="post" action="controller/login_add.php">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" />
						</div>
						<div class="form-group">
							<input type="submit" value="Connection" />
						</div>
					</form>
				</div>

			</div> <!-- main login-main-->
		</div> <!--middle-->
		<?php include("footer.php") ?>
	</div> <!--wrapper-->
</body>
</html>