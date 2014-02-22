<?php
	include "checksession.php";
	include "connectionDb.php";
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Book Store Search</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
<body>
	<div id="wrapper">
		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="#">Advise of Library</a></h1>
					<p>ระบบค้นหาหนังสือออนไลน์<a href="http://web.sut.ac.th/dsa/advise/" rel="nofollow"> -- งานแนะแนว  ส่วนกิจการนักศึกษา</a></p>
				</div>
			</div>
		</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="admin.php?menu=1&do=add">Add Book</a></li>
			<li><a href="admin.php?menu=2&do=edit">Edit & Delete</a></li>
			<li><a href="logout.php">ออกจากระบบ</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
					<div class="post">
						<center>
							<h1>ยินดีต้อนรับเข้าสู่ระบบจัดการข้อมูลหนังสือ</h1>
							กรุณาเลือกสิ่งที่ต้องการ เช่น <b> Add Book, Edit&Delete </b> จาก เมนูด้านบน
							<br><p>
							<hr width="90%" size="5px" color="gray">
						</center>
						<table border="0" align="center" cellpadding="1" cellspecing="1">
							<tr><td align="center">
								<?php
									if($_REQUEST['menu']=="1"){
										if($_REQUEST['do']=="add"){
											include "addbook.php";
										}
									}else if($_REQUEST['menu']=="2"){
										if($_REQUEST['do']=="edit"){
											include "editSection.php";
										}else if($_REQUEST['do']=="delete"){
											$sql_del="delete from book_info where ISBN='$_REQUEST[id]'";
											$result_del=mysql_query($sql_del);
											if($result_del){
												echo "<h3>ลบข้อมูลหนังสือเรียบร้อยแล้ว</h3>";
												echo "<meta http-equiv='refresh' content='3;url=admin.php?menu=2&do=edit'>";
											}else{
												echo "<h3>ไม่สามารถลบข้อมูลหนังสือได้</h3>";
												echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
											}
										}
									}
									@include "closeDb.php";
								?>
							</td></tr>
						</table>
					</div>
					
	</div>

	<div id="footer">
		<p><a href="http://web.sut.ac.th/dsa/advise/">งานแนะแนวการศึกษา ส่วนกิจการนักศึกษา</a> | <a href="http://web.sut.ac.th/2012/">มหาวิทยาลัยเทคโนโลยีสุรนารี </a> <br>
			เลขที่ 111 ถ.มหาวิทยาลัย ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000 | โทรศัพท์ 044-223110, 044-223120 โทรสาร 044-223119 <br>
			Copyright © 2012. All Rights Reserved.</p>
	</div>
<!-- end #footer -->
</body>
</html>
<?php
	
?>
