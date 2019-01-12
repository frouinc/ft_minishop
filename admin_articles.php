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
						<th>Image</th>
						<th>Description</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>
							<img class="icon" src="https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png" />
							<img class="icon" src="https://cdn3.iconfinder.com/data/icons/objects/512/Bin-512.png" />
						</td>
						<td>0</td>
						<td>ARTICLE NAME LOREM IPSUM DOLOR SIT AMET</td>
						<td><img class="icon" src="https://picsum.photos/200/200" /></td>
						<td>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut porttitor leo. Maecenas tincidunt mauris ligula, consequat blandit ligula rhoncus eget. Nunc quis bibendum massa. Morbi semper felis id ante pulvinar, non euismod ipsum porttitor. Nunc aliquet dictum mattis. Sed laoreet ultricies nisi, ut dignissim dui dapibus ut. Etiam eu justo iaculis, accumsan mauris malesuada, fringilla justo. Nullam sit amet purus pellentesque, congue dui a, luctus quam. Sed malesuada augue sapien, nec pretium tellus placerat quis. Curabitur condimentum ante sit amet placerat semper. Vivamus luctus fermentum tellus, ut scelerisque justo vulputate nec. Phasellus vel nisl in libero auctor egestas. Nulla facilisi. Aenean eget sapien ex. Nulla rhoncus purus magna, eget pulvinar neque vehicula eu. Nullam vitae felis a magna consequat vulputate in et mauris.
							</p>
						</td>
						<td>5000.00 €</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include("../footer.php") ?>
	</div>
</body>
</html>