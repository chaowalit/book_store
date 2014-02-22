<?php
	include "connectionDb.php";
?>
<!DOCTYPE html>  
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Show Search</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />
		<style>
				table.fixed {table-layout:fixed; width:1000px; overflow:hidden; word-wrap:break-word;}	/*Setting the table width is important!*/
         		table.fixed th {overflow:hidden;}				/*Hide text outside the cell.*/
         		table.fixed th:nth-of-type(1) {width:200px;}		/*Setting the width of column 1.*/
         		table.fixed th:nth-of-type(2) {width:150px;}		/*Setting the width of column 2.*/
         		table.fixed th:nth-of-type(3) {width:150px;}		/*Setting the width of column 3.*/
         		table.fixed th:nth-of-type(4) {width:100px;}
         		table.fixed th:nth-of-type(5) {width:100px;}
         		table.fixed th:nth-of-type(6) {width:60px;}
         		table.fixed th:nth-of-type(7) {width:240px;}
		</style>
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
			<li><a href="index.php?menu=3">ย้อนกลับ</a></li>
		</ul>
	</div>
	<!-- end #menu -->

	<div id="page">
					<div class="post">
						<center>
							<div  style="border: none; width: 1105px">
								<table>
									<thead>
										<tr><th align="center"><br>ข้อมูลหนังสือ ทั้งหมดที่ค้นเจอ<br><hr width="80%"></th></tr>
									</thead>
									<tbody>
										<tr><td>
											<div class="datagrid">
													<table  class="fixed">
														<thead>
															<tr>
																<th>Title</th>
																<th>Author</th>
																<th>Translator</th>
																<th>Category</th>
																<th>Location</th>
																<th>Amount</th>
																<th>Detail</th>
															</tr>
														</thead>
														<tbody>
														<?php
															$search = $_REQUEST["search"];
															$typesearch = $_REQUEST["typesearch"];
															$count_number=0;
															
															if($search == ""){
																$total = 0;
															}else{
																if($typesearch == "11"){
																	$search = trim($search);
																	$query = "select Title, Author, Translator, Category, Location, Amount, Detail from book_info where Title like "."'%".$search."%'";
																}else if($typesearch == "22"){
																	$search = trim($search);
																	$query = "select Title, Author, Translator, Category, Location, Amount, Detail from book_info where Author like "."'%".$search."%'";
																}else if($typesearch == "33"){
																	$search = trim($search);
																	$query = "select Title, Author, Translator, Category, Location, Amount, Detail from book_info where Translator like "."'%".$search."%'";
																}else if($typesearch == "44"){
																	$search = trim($search);
																	$query = "select Title, Author, Translator, Category, Location, Amount, Detail from book_info where Category like "."'%".$search."%'";
																}else{
																	$search = trim($search);
																	$query = "select Title, Author, Translator, Category, Location, Amount, Detail from book_info where ISBN = '$search'";
																}
																	$result = mysql_query($query);
																	$total = mysql_num_rows($result);
																	while($dbarr_cat = mysql_fetch_array($result)){
																		$count_number++;
																		if($count_number % 2 == 1){
														?>
																			<tr>
																				  <td> <?php echo $dbarr_cat['Title']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Author']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Translator']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Category']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Location']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Amount']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Detail']; ?> </td>
												
																			</tr>
																	<?php }else{ ?>
																		<tr class='alt'>
																				  <td> <?php echo $dbarr_cat['Title']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Author']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Translator']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Category']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Location']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Amount']; ?> </td>
																				  <td> <?php echo $dbarr_cat['Detail']; ?> </td>
																				 
																			</tr>
														<?php		
																	}
																}
															}
														?>
														</tbody>
														<tfoot>
															<tr><td colspan="10" align="right"><div id="paging">Total:<?php echo " $total "; ?> record</div></td></tr>
														</tfoot>
													</table>
											</div>
										</td></tr>
									</tbody>
								</table>
							</div>
      					</center>
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