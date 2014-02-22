<html>
	<head>
		<meta charset=utf-8 />
		<title>Book Store Search</title>
	</head>
	<body>
<?php
	@session_start();
	$sess_userlogin = $_SESSION["sess_userlogin"];
	
	if($sess_userlogin == ""){
		echo "<br><font color='red'>ไม่อนุญาตให้เข้าระบบ กรุณา Login ใหม่อีกครั้ง</font>";
		echo "<meta http-equiv='refresh' content='2;url=index.php'>";
		exit();
	}
?>
	</body>
</html>