<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>漫画狗--你想要的所有</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/sign.css">
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
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="sign.php">登录</a></li>
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
			<br>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="用户名/手机/邮箱">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="密码">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">登录</button>
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