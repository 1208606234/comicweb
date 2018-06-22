<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>漫画狗--你想要的所有</title>
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> 
</head>
<body>
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
					<form action="" method="post" name="seach_name">
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
	<div class="container">
		<div class="row">
		<div class="col-sm-2">
			<div class="list-group sidebar">
				<a href="#" class="list-group-item active">分类</a>
				<a href="#" class="list-group-item">热血</a>
				<a href="#" class="list-group-item">恋爱</a>
				<a href="#" class="list-group-item">后宫</a>
				<a href="#" class="list-group-item">恐怖</a>
				<a href="#" class="list-group-item">搞笑</a>
				<a href="#" class="list-group-item">都市</a>
				<a href="#" class="list-group-item">全部</a>
				<a href="#" class="list-group-item active">地区</a>
				<a href="#" class="list-group-item">日漫</a>
				<a href="#" class="list-group-item">国漫</a>
				<a href="#" class="list-group-item">欧美</a>
				<a href="#" class="list-group-item">全部</a>
			</div>
		</div>
		<div class="col-sm-7">
			<div class='news-list'>
				<!-- <div class='news-list-item clearfix'>
					<div class='col-xs-4'> -->
						<?php

							
							if(isset($_POST['ok'])){
									$soso = $_POST['ss'];
									$soso_sql = "select * from tb_book where bookname like '%$soso%'";
									$soso_result = mysqli_query($conn,$soso_sql);
									while($soso_row=mysqli_fetch_array($soso_result)){
										echo "<div class='news-list-item clearfix'>";
								echo "<div class='col-xs-4'>";
								echo "<img src=images/".$soso_row['bookimage'].">";
								echo "</div>";
								echo "<div class='col-xs-8'>";
								echo "<div class='title'>";
								echo $soso_row['bookname'];
								echo "</div>";
								echo "<div class='status'>状态:".$soso_row['bookzt']."</div>";
								echo "<div class='info'>".$soso_row['bookinfo']."</div>";
								echo "</div>";
								echo "</div>";
							
									}
									
								}
							?>
							


			</div>
			
		</div>
		<div class="col-sm-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id unde, ut placeat adipisci quod incidunt animi expedita enim similique sapiente? Consequuntur, accusamus dignissimos est, quod ad debitis cupiditate necessitatibus commodi!</div>
		</div>

	</div>
	<div class="navbar navbar-default bottom">
			<div class="container">
				<div class="bottom-item">
				<ul>
					<li><b style="font-size:18px">关于我们</b></li>
					<li>法律声明</li>
					<li>招聘启事</li>
					<li>更多问题</li>
				</ul>
				</div>
				<div class="bottom-item">
				<ul>
					<li><b style="font-size:18px">商务合作</b></li>
					<li>市场合作</li>
					<li>商务合作</li>
					<li>友情链接</li>
				</ul>
				</div>

				<div class="bottom-item">
				<ul>
					<li><b style="font-size:18px">联系我们</b></li>
					<li>在线客服</li>
					<li>官方微博</li>
					<li>意见反馈</li>
					<li>违法举报</li>
				</ul>
				</div>
				<div class="bottom-item" style="width:335px;height:130px;border-left:1px solid #999;border-right:1px solid #999;">
					<img src="images/bottom-image.jpg">
					<img src="images/bottom-image.jpg">
				</div>
				<div class="bottom-item " style="width:335px">
					<p style="color:#666;margin-top:30px">@本网站是独立开发者我凭借爱好制作的,作为磨练自己技术而写的,所以不会盈利.资源来自于网络</p>
				</div>
			</div>
	</div>
</body>
</html>