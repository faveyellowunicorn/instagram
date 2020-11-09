<?php 
	$connect = mysqli_connect('127.0.0.1', 'root','','insta');
	$add = "UPDATE posts SET text = '{$_GET["text"]}', img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}' ";
	$query = mysqli_query($connect, $add);
	header("location: index.php")
	
 ?>