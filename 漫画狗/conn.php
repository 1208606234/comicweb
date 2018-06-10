<?php
	$servername = "localhost";
	$username = "root";
	$userpassword = "root";
	$userdatabase = "db_book";
	$conn = mysqli_connect($servername,$username,$userpassword,$userdatabase);
	if(!$conn){
		die("连接失败".mysqli_connect_error());
	}
?>