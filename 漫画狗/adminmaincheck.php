<?php 
error_reporting(E_ALL^E_NOTICE^E_WARNING);
	include "conn.php";
	if(isset($_POST['ok']))
	{
		$bookname = $_POST['bookname'];
		$bookzt = $_POST['bookzt'];
		$bookimage = $_POST['bookimage'];
		$bookdate = $_POST['bookdate'];
		$bookjj = $_POST['bookjj'];
		// 把图片上传到指定文件夹

		if(is_uploaded_file($_FILES['bookimage']['tmp_name']))
		{
			$name = $_FILES['bookimage']['name'];
			$type = $_FILES['bookimage']['type'];
			$size = $_FILES['bookimage']['size'];
			$tmp_name = $_FILES['bookimage']['tmp_name'];
			$error = $_FILES['bookimage']['error'];
			switch($type){
				case 'image/jpeg':$ok=1;break;
				case 'image/gif':$ok=1;break;
				case 'image/png':$ok=1;break;
				default:echo "不能上传其他格式的文件!";break;
				
			}
			if($ok==1&&$error==0){
					move_uploaded_file($tmp_name,'images/'.$name);
					echo "图片上传成功!";
				}
			else
			{
				echo "图片上传失败!";
			}
		}
		// 插入数据
		// sql语句中插入图片的参数 $name不能是$bookimage否则会为空具体原因未知
	 $sql = "INSERT INTO `tb_book` (`id`, `bookname`, `bookinfo`, `bookimage`, `bookzt`, `bookdate`) VALUES (NULL, '$bookname', '$bookjj', '$name', '$bookzt', '$bookdate')";
	 mysqli_query($conn,$sql);
	 echo "插入成功!";
	}
	else
	{
		echo "未获取到程序!";
	}
 ?>