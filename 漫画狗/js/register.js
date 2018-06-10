
		function check()
		{
			if($("#id").val()=="")
			{
				alert("用户名不能为空!");
				return false;
			}
			else{
				var checkId = /^[a-zA-Z]\w{3,18}$/;
				var id = $("#id").val();
				if(!checkId.test(id))
				{
					alert("用户名必须是以字母开头的3-18位字符!");
					return false;
				}

			}
			if($("#password").val()=="")
			{
				alert("密码不能为空!");
				return false;
			}
			else
			{
				var checkPassword = /^[a-zA-Z0-9]{5,20}$/;
				var password = $("#password").val();
				if(!checkPassword.test(password)){
					alert("密码必须是6-20位数字字母组合");
					return false;
				}


				if($("#password").val()!=$("#realpassword").val()){
					alert("密码不一致!");
					return false;
				}
			}
			if($("#xinname").val()!="野原新之助")
			{
				alert("再想想小新的名字吧!");
				return false;
			}
			if($("#yzm").val()=="")
			{
				alert("验证码不能为空!");
				return false;
			}
		}