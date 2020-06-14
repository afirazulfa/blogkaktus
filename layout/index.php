<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>

<div>
	
	<!-- ini untuk header -->
	<div class="header">

		<img src="layout/assets/images/header.jpg">
	
	</div>

	<!-- ini untuk menu -->
	<div class="menu">
		<center>
		<a href="index.php">Home</a>
		<a href="index.php?page=category_tampil">Category</a>
		<a href="index.php?page=post_tampil">Post</a>
		<a href="index.php?page=photos_tampil">Photos</a>
		<a href="index.php?page=album_tampil">Album</a>
		<a href="login.php" class="logout">Logout</a>
		</center>
	</div>


	<!-- ini untuk utama -->
	<div class="main">

	<?php

	if (isset($_GET['page'])) {
		include $_GET['page'] . ".php";
} else {
	include "main.php";

}
	?>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		copyright &copy; 2020. Programmed by Afira Zulfa
	
	</div>

</div>

</body>
</html>
