<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>漫画狗--你想要的所有</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/sign.css">
	<script src="js/jquery_min.js"></script> 
	<script src="js/yinghua.js"></script>
	<script src="js/sign.js"></script>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand"><a href="index.php"></a></div>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">首页</a></li>
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
					error_reporting(E_ALL^E_NOTICE^E_WARNING);
				session_start();
				if($_SESSION['islogin']==1){
				echo "<b>欢迎你:".$_SESSION['username']."</b>";
				}
				else{
					echo "<b>未登录</b>";
				}
				?>
				</a></li>
				<li class="active"><a href="sign.php">登录</a></li>
				<li><a href="register.php">注册</a></li>
				<li><a href="quitsign.php">退出登录</a></li>
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
			<br>
			<form action="checkSign.php" method="post" onsubmit="return check(this)">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="用户名/手机/邮箱" name="id" id="id">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="密码" name="password" id="password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-block" name="ok" value="登录">
				</div>
			</form>
			<div style="text-align:center"><h2 style="color:white;">没有账号?<a href="register.php">注册</a></h2><a href="#" style="color:white">->忘记密码?<-</a></div>
			
			
		</div>
		<div class="bottom">
		<hr color:white>
		<p style="color:white">专注分享对世界的看法,和对acg文化的热爱</p>
		
		<hr color:white>
			<p style="color:gray">版权所属@Raymond Kenny,是我做的.</p>
		
		
		</div>
	</div>
</body>
</html>