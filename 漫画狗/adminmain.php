<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台管理-添加图书</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/adminmain.css">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> 
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container">
		<div class="navbar-brand">
			漫画后台管理界面
		</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">▶图书管理◀</a></li>
				<li><a href="#" class="list-group-item">·增加图书</a></li>
				<li><a href="#" class="list-group-item">·管理图书</a></li>
				<li class="active"><a href="#" class="list-group-item">▶类别管理◀</a></li>
				<li><a href="#" class="list-group-item">·编辑类别</a></li>
				<li><a href="#" class="list-group-item">·增加类别</a></li>
				<li class="active"><a href="#" class="list-group-item">▶用户管理◀</a></li>
				<li><a href="#" class="list-group-item">·会员管理</a></li>
				<li><a href="#" class="list-group-item">·管理员管理</a></li>
				<li class="active"><a href="#" class="list-group-item">▶公告管理◀</a></li>
				<li><a href="#" class="list-group-item">·编辑公告</a></li>
				<li><a href="#" class="list-group-item">·添加公告</a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<table border="1">
				<form action="adminmaincheck.php" enctype="multipart/form-data" method="post">
				<tr>
					<td colspan="2">您当前的位置:图书管理->增加图书</td>
				</tr>
				<tr>
					<td>图书名称:</td>
					<td><input type="text" name="bookname"></td>
				</tr>
				<tr>
					<td>图书状态:</td>
					<td><input type="text" name="bookzt"></td>
				</tr>
				<tr>
					<td>图书图片:</td>
					<td><input type="file" name="bookimage"></td>
				</tr>
				<tr>
					<td>添加日期:</td>
					<td><input type="date" name="bookdate"></td>
				</tr>
				<tr>
					<td>图书简介:</td>
					<td><textarea cols="30" rows="5" checked="checked" name="bookjj"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;">
						<input type="submit" value="提交" name="ok">
						<input type="reset">
					</td>
				</tr>
				</form>
			</table>
		</div>
		</div>
	</div>
	<div class="navbar navbar-fixed-bottom navbar-default">
		<div class="container">
			这是漫画后台管理页面,你到达这里以为这你已经拥有了这个系统全部的权限,请好自为之!
		</div>
	</div>
</body>
</html>