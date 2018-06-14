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
				<div class="input-group" style="padding-top:7px;padding-left:200px;">
					<input type="text" class="form-control" placeholder="搜索漫画">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							Go!
						</button>
					</span>
					</div><!-- /input-group -->
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
								echo "共".$every_page."页-当前是第".$page."页";
								echo "<a href=?page=1>第一页</a>";
								echo "<a href=?page=".($page+1).">下一页</a>";
								echo "<a href=?page=".($page-1).">上一页</a>";
								echo "<a href=?page=".$every_page.">尾页</a>";
								if($_GET['page']==0)
								{
									echo "<script>alert('你达到了未知领域请返回!');</script>";
								}
							?>


			</div>
			
		</div>
		<div class="col-sm-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id unde, ut placeat adipisci quod incidunt animi expedita enim similique sapiente? Consequuntur, accusamus dignissimos est, quod ad debitis cupiditate necessitatibus commodi!</div>
		</div>
	</div>
</body>
</html>