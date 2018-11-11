<?php 
	session_start();		//开启session
	$_SESSION=array();		//删除所有session变量
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()-3600);         //删除SessionID
	}
	session_destroy();    //最后彻底销毁session
 ?>
 <script>location.href="index.php";</script>

