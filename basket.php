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
			<div class="main basket-main">
				<h1>Basket</h1>
				<div class="basket-article-container">
					<table class="basket-article-table">
						<tr>
							<th>Action</th>
							<th>Article</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
						<tr>
							<td><img class="icon" src="https://cdn3.iconfinder.com/data/icons/objects/512/Bin-512.png" /></td>
							<td>ARTICLE NAME LOREM IPSUM DOLOR SIT AMET</td>
							<td>5000.00€</td>
							<td><input type="number" value="1" /></td>
							<td>5000.00€</td>
						</tr>
						<tr>
							<td><img class="icon" src="https://cdn3.iconfinder.com/data/icons/objects/512/Bin-512.png" /></td>
							<td>ARTICLE NAME LOREM IPSUM DOLOR SIT AMET</td>
							<td>5000.00€</td>
							<td><input type="number" value="1" /></td>
							<td>5000.00€</td>
						</tr>
						<tr>
							<td><img class="icon" src="https://cdn3.iconfinder.com/data/icons/objects/512/Bin-512.png" /></td>
							<td>ARTICLE NAME LOREM IPSUM DOLOR SIT AMET</td>
							<td>5000.00€</td>
							<td><input type="number" value="1" /></td>
							<td>5000.00€</td>
						</tr>
						<tfoot>
							<tr>
								<td colspan="4"></td>
								<td>15000.00 €</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<?php include("footer.php") ?>
	</div>
</body>
</html>