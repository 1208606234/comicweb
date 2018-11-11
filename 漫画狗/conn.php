<?php
	$servername = "localhost";
	$username = "root";
	$userpassword = "";
	$userdatabase = "db_book";
	$conn = mysqli_connect($servername,$username,$userpassword,$userdatabase);
 	mysqli_query($conn,"set names utf8");
	if(!$conn){
		die("连接失败".mysqli_connect_error());
	}
?>
