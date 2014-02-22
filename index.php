<!DOCTYPE html>  
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Book Store Search</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
			<li><a href="index.php?menu=3">ค้นหาหนังสือ</a></li>
			<li><a href="index.php?menu=4">เข้าสู่ระบบ (สำหรับผู้ดูแล)</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		
					<div class="post">
						<center>
							<h3>ยินดีต้อนรับเข้าสู่ระบบค้นหาข้อมูลหนังสือ</h3>
							<b><big>กรุณาเลือกประเภทของการสืบค้น และ ใส่รายละเอียดหนังสือที่ต้องการค้น</big></b>
							
							<hr width="90%" size="5px" color="gray">
						</center>
						<?php
							if($_REQUEST['menu'] == "4"){

							
						?>
						<div class="container">
							<fieldset><legend><b><i>Login</i></b></legend>
								<form action="checklogin.php" method="post" class="well form-inline">
									<div class="control-group">
										<label class="control-label"><b>User Name:</b></label>
										<div>
											<input type="text" name="user_login" class="span3" placeholder="User Name">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><b>Password:</b></label>
										<div>
											<input type="password" name="pwd_login" class="span3" placeholder="Password">
										</div>
									</div>
									<label class="checkbox">  
										<input type="checkbox"> Remember me  
									</label>
								<br>
									<button type="submit" class="btn">Sign in</button> &nbsp; <button type="reset" class="btn">Cancel</button> 
								</form>
							</fieldset>
						</div>
						<?php
							}else if($_REQUEST['menu'] == "3"){
						?>
						<div class="container">
							<form action="showsearch.php" method="post" class="well form-inline">
								<div class="control-group">
									<label class="control-label"><b>ประเภทการค้นหา:</b></label>
									<div class="controls">  
              							<select name="typesearch">  
               				 				<option value="11">Title</option>  
                							<option value="22">Author</option>  
                							<option value="33">Translator</option>  
                							<option value="44">Category</option>  
                							<option value="55">ISBN</option>  
              							</select>  
            						</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>ข้อความค้นหา:</b></label>
									<div>
										<input type="text" name="search" class="span3" placeholder="Search">
									</div>
								</div>
								<button type="submit" class="btn">Search</button>
							</form>

						</div>
						<?php
							}
						?>
					</div>
					
					
				</div>
				<!-- end #content -->
				
				<!-- end #sidebar -->
				

<div id="footer">
	<p><a href="http://web.sut.ac.th/dsa/advise/">งานแนะแนวการศึกษา ส่วนกิจการนักศึกษา</a> | <a href="http://web.sut.ac.th/2012/">มหาวิทยาลัยเทคโนโลยีสุรนารี </a> <br>
		เลขที่ 111 ถ.มหาวิทยาลัย ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000 | โทรศัพท์ 044-223110, 044-223120 โทรสาร 044-223119 <br>
		Copyright © 2012. All Rights Reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
