<?php

include("initdb.php")

if ($_POST['username'] !== null && $_POST['username'] !== ""
	&& $_POST['password'] !== null && ($_POST['password'] !== "")) 

{

	$password = hash("whirpool",$_POST['password']);
	$sql = "SELECT * FROM user WHERE username = $_POST['password'";
	$result = mysqli_query($conn, $sql);
}


$result = mysqli_query($conn, $sql);

$user = [];
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$articles[] = $row;
	}
}

// select du user
$sql = "SELECT * FROM user WHERE ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$categories[] = $row;
	}
}

mysqli_close($conn);

?>



<?php

require('../initdb.php');

$perm = 1;


if ($_POST['username'] !== null && $_POST['username'] !== ""
	&& $_POST['password'] !== null && ($_POST['password'] !== "")) 
{
	$sql = "INSERT INTO user (username, password, permission) VALUES (?, ?, ?)";

	$stmt = mysqli_stmt_init($conn);
	if (mysqli_stmt_prepare($stmt, $sql)) 
	{
		mysqli_stmt_bind_param($stmt, "ssi", $_POST['username'], hash("whirpool",$_POST['password']), $perm);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($conn);
}

header('Location: ../login.php');

?>