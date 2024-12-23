<<?php 
	

	$connect = mysqli_connect('MySQL-8.2', 'root', '', 'steam');
	mysqli_query($connect, 'SELECT * FROM wishlist');
	mysqli_query($connect, "INSERT INTO wishlist (img,title,price) VALUES ('{$_GET["img"]}', '{$_GET["title"]}', '{$_GET["price"]}' )"); 	



	header("Location: https://wishlist.local/index.php");
	
 ?>
