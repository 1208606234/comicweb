<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
session_start();
include "conn.php";
$id = $_POST['id'];
$password = $_POST['password'];
$sql = "select * from tb_user where username='$id'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	echo "用户名存在";
	$row=mysqli_fetch_array($result);
	if($password != $row['password']){
		echo "密码错误!请重新登录!";
	}
	else
	{
		$_SESSION['username']=$id;
		$_SESSION['islogin']=1;
		echo "<script>location.href='index.php';</script>";
	}

}
else
{
	echo "用户名不存在,请点击右上角注册!";
}

?>