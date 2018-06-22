<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>漫画狗--你想要的所有</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/register.css">
	 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/yinghua.js"></script>
	<script src="js/register.js"></script>
</head>
<body>
	<?php
	include "conn.php"; 
	$id = $_POST['id'];
	$password = $_POST['password'];
	
	?>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand"><a href="index.php"></a></div>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">首页</a></li>
				<li><a href="#">更新</a></li>
				<li><a href="#">排行榜</a></li>
				<li><a href="#">分类</a></li>
				<li>
					<form action="seach.php" method="post" name="seach_name">
				<div class="input-group" style="padding-top:7px;padding-left:200px;">
					<input type="text" name="ss" class="form-control" placeholder="搜索漫画">
					<span class="input-group-btn">
						<input type="submit" class="btn btn-default" name="ok" value="Go!">
					</span>
					</div><!-- /input-group -->
					</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">
					<?php
				include "conn.php";
				session_start();
				if($_SESSION['islogin']==1){
				echo "<b>欢迎你:".$_SESSION['username']."</b>";
				}
				else{
					echo "<b>未登录</b>";
				}
				?>
				</a></li>
				<li><a href="sign.php">登录</a></li>
				<li><a href="register.php">注册</a></li>
			</ul>
		</div>
	</div>
	<div class="box">
		<div class="top">
			<br>
			<p><img class="rect" src="images/toplogo.png"></p>
			<br>
			<br>

			<p><img src="images/img_title.png"></p>
			<hr color="white">
			<br>
			<br>
		</div>
		<div class="container container-small">
			<br>
		
			<div class="tc"><h1 style="color:white">
			<?php
			
			if(isset($_POST['ok']))
			{
			$sql = "select * from tb_user where username='$id'";
			$result = mysqli_query($conn,$sql);
			if($row = mysqli_num_rows($result)){
				echo "有相同的的用户名";
			}
			else
			{
			$rs = "INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES (NULL, '$id', '$password');";
			mysqli_query($conn,$rs);
			echo "注册成功!请点击右上角登录!";
			}
		}

			 ?>
			</h1></div>

			
			
		</div>
		<div class="bottom">
		<hr color:white>
		<p style="color:white">专注分享对世界的看法,和对acg文化的热爱</p>
		
		<hr color:white>
			<p style="color:gray">版权所属@Raymond Kenny,是我做的.</p>
		</div>

	</div>
	
	<!-- 樱花的特效 -->
 <script>
    $(function(){
        $('.cherry').Cherry_Blossoms({
            is_Cherry:true,//是否生成樱花
            image_min:10,//花瓣最小宽度和高度
            image_max:50,//花瓣最大宽度和高度
            time_min:10000,//花瓣最快下坠时间
            time_max:20000,//花瓣最慢下坠时间
            interval:100//花瓣生成时间间隔
        })
    })
</script>
</body>
</html>
	
	
