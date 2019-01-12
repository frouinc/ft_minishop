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
					<h2>Login</h2>
					<form method="post" action="login.php">
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
					<h2>Register</h2>
					<form method="post" action="login.php">
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
			</div>
		</div>
		<?php include("footer.php") ?>
	</div>
</body>
</html>