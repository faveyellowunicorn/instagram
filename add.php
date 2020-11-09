<?php 
	$connect = mysqli_connect("127.0.0.1","root","","insta");
	$text_zaprosa_vstavit = "INSERT INTO posts ( user, text, img,  id) 
	VALUES ('". $_GET["user"] ."', '". $_GET["text"] ."',  '". $_GET["img"] ."',  '". $_GET["id"] ."' )";
	$zapros_new = mysqli_query($connect, $text_zaprosa_vstavit);
    
	header("Location: index.php");

 ?>