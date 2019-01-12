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
						<th>Username</th>
					</tr>
					<tr>
						<td>
							<img class="icon" src="https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png" />
							<img class="icon" src="https://cdn3.iconfinder.com/data/icons/objects/512/Bin-512.png" />
						</td>
						<td>0</td>
						<td>USERNAME</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include("../footer.php") ?>
	</div>
</body>
</html>