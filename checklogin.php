<?
	$admin_user = "administrator";
	$admin_pwd = "admin";
	
	$user_login=(isset($_REQUEST["user_login"]))?$_REQUEST["user_login"]:$_SESSION["sesuser_wb"];
	$pwd_login=(isset($_REQUEST["pwd_login"]))?$_REQUEST["pwd_login"]:$_SESSION["sespasswd_wd"];
	
	if(($user_login == "") || ($pwd_login == "")){
		echo "<br><font color='red'>กรุณากรอก Username หรือ Password ด้วย</font>";
		echo "<meta http-equiv='refresh' content='2;url=index.php'>";
	}else if(($user_login != $admin_user) || ($pwd_login != $admin_pwd)){
		echo "<br><font color='red'>Username หรือ Password ไม่ถูกต้อง</font>";
		echo "<meta http-equiv='refresh' content='2;url=index.php'>";
	}else{
		session_start();
		$_SESSION[sess_userlogin] = $user_login;
		echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
	}
?>