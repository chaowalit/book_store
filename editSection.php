<?php
	include "checksession.php";
  	include "connectionDb.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
		<title>Edit Book Store</title>
		<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />
		<style>
				table.fixed {table-layout:fixed; width:1060px; overflow:hidden; word-wrap:break-word;}	/*Setting the table width is important!*/
         		table.fixed th {overflow:hidden;}				/*Hide text outside the cell.*/
         		table.fixed th:nth-of-type(1) {width:95px;}		/*Setting the width of column 1.*/
         		table.fixed th:nth-of-type(2) {width:150px;}		/*Setting the width of column 2.*/
         		table.fixed th:nth-of-type(3) {width:120px;}		/*Setting the width of column 3.*/
         		table.fixed th:nth-of-type(4) {width:120px;}
         		table.fixed th:nth-of-type(5) {width:100px;}
         		table.fixed th:nth-of-type(6) {width:100px;}
         		table.fixed th:nth-of-type(7) {width:50px;}
         		table.fixed th:nth-of-type(8) {width:225px;}
         		table.fixed th:nth-of-type(9) {width:50px;}
         		table.fixed th:nth-of-type(10) {width:50px;}

			
		</style>
	</head>
	<body>
		<?php
			$page=$_GET['page'];
			if($page==""){
				$page=1;
			}
			$each=10;

			$sql_cat = "select * from book_info";
			$result_cat = mysql_query($sql_cat);
			$totals = mysql_num_rows($result_cat);

			$totalpages = ceil($totals/$each);
			$goto = ($page-1)*$each;

			$sql_cat = "select * from book_info order by ISBN DESC limit $goto,$each";
			$result_cat = mysql_query($sql_cat);


		?>
		<div  style="border: none; width: 1105px">
		<table>
			<thead>
				<tr><th align="center">ระบบจัดการ แก้ไขและลบ ข้อมูลหนังสือ</th></tr>
			</thead>
			<tbody>
				<tr><td>
					<div class="datagrid">
							<table  class="fixed">
								<thead>
									<tr><th>ISBN</th>
										<th>Title</th>
										<th>Author</th>
										<th>Translator</th>
										<th>Category</th>
										<th>Location</th>
										<th>Amount</th>
										<th>Detail</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$number = 0;
										while($dbarr_cat = mysql_fetch_array($result_cat)){
										$number++;
										if($number % 2 == 1){
									?>
									
												<tr><td> <?php echo $dbarr_cat['ISBN'] ; ?> </td>
													  <td> <?php echo $dbarr_cat['Title']; ?> </td>
													  <td> <?php echo $dbarr_cat['Author']; ?> </td>
													  <td> <?php echo $dbarr_cat['Translator']; ?> </td>
													  <td> <?php echo $dbarr_cat['Category']; ?> </td>
													  <td> <?php echo $dbarr_cat['Location']; ?> </td>
													  <td> <?php echo $dbarr_cat['Amount']; ?> </td>
													  <td> <?php echo $dbarr_cat['Detail']; ?> </td>
													  <td align="center">[<a href="formEdit.php?id=<?=$dbarr_cat['ISBN']; ?>">แก้ไข</a>]</td>
													  <td align="center">[<a href="admin.php?menu=2&do=delete&id=<?=$dbarr_cat['ISBN']; ?>"> ลบ </a>]</td>
												</tr>
										<?php }else{ ?>
											<tr class='alt'><td> <?php echo $dbarr_cat['ISBN'] ; ?> </td>
													  <td> <?php echo $dbarr_cat['Title']; ?> </td>
													  <td> <?php echo $dbarr_cat['Author']; ?> </td>
													  <td> <?php echo $dbarr_cat['Translator']; ?> </td>
													  <td> <?php echo $dbarr_cat['Category']; ?> </td>
													  <td> <?php echo $dbarr_cat['Location']; ?> </td>
													  <td> <?php echo $dbarr_cat['Amount']; ?> </td>
													  <td> <?php echo $dbarr_cat['Detail']; ?> </td>
													  <td align="center">[<a href="formEdit.php?id=<?=$dbarr_cat['ISBN']; ?>">แก้ไข</a>]</td>
													  <td align="center">[<a href="admin.php?menu=2&do=delete&id=<?=$dbarr_cat['ISBN']; ?>"> ลบ </a>]</td>
												</tr>
										<?php	}
										} ?>
								</tbody>
								<tfoot>
									<tr><td colspan="10" align="right"><div id="paging">มีทั้งหมด<?php echo " - $totals"; ?> รายการ : 
										<?php
											if($totalpages > 1){
												for($i=1;$i<=$totalpages;$i++){
													if($i == $page){
														echo "<b>หน้า $page</b>";
													}else{
														echo "| <a href=\"admin.php?menu=2&do=edit&page=$i\">$i</a>&nbsp;";
													}
												}
											}
											@include "closeDb.php";
										 ?></div></td></tr>
								</tfoot>
							</table>
					</div>
				</td></tr>
			</tbody>
		</table>
		</div>
	</body>
</html>
