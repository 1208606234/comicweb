function check()
{
	if($("#id").val()==""){
		alert("用户名不能为空!");
		return false;
	}
	if($("#password").val()==""){
		alert("密码不能为空!");
		return false;
	}

}