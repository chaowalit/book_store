<?php
	include "checksession.php";
  	include "connectionDb.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
		<title>Edit Book Store</title>
		<!--<link href="style.css" rel="stylesheet" type="text/css" media="screen" /> -->

		<style type="text/css">

      /* Generic form fields */

      fieldset.elist, input[type="text"], textarea, select, option, fieldset.elist ul, fieldset.elist > legend, fieldset.elist input[type="text"], fieldset.elist > legend:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }

      input[type="text"] {
        padding: 0 20px;
      }

      textarea {
        width: 500px;
        height: 200px;
        padding: 20px;
      }

      textarea, input[type="text"], fieldset.elist ul, select, fieldset.elist > legend {
        border: 2px #cccccc solid;
        border-radius: 10px;
      }

      input[type="text"], fieldset.elist, select, fieldset.elist > legend {
        height: 32px;
        font-family: Tahoma;
        font-size: 14px;
      }

      input[type="text"]:hover, textarea:hover, select:hover, fieldset.elist:hover > legend {
        background-color: #ddddff;
      }

      select {
        padding: 4px 20px;
      }

      option {
        height: 30px;
        padding: 5px 4px;
      }

      option:not(:checked), textarea:focus {
        background-color: #ffcccc;
      }

      fieldset.elist > legend:after, fieldset.elist label {
        height: 28px;
      }

      input[type="text"], fieldset.elist {
        width: 316px;
      }



      input[type="text"]:focus, textarea:focus, select:focus, fieldset.elist > legend {
        border: 2px #ccaaaa solid;
      }

      fieldset {
        border: 2px #ffffff solid;
        border-radius: 10px;
      }

/* Editable [pseudo]select (i.e. fieldsets with [class=elist]) */

      fieldset.elist {
        display: inline-block;
        position: relative;
        vertical-align: middle;
        overflow: visible;
        padding: 0;
        margin: 0;
        border: none;
      }

      fieldset.elist ul {
        position: absolute;
        width: 100%;
        max-height: 320px;
        padding: 0;
        margin: 0;
        overflow: hidden;
        background-color: transparent;
      }

      fieldset.elist:hover ul {
        background-color: #ffffff;
        border: 2px #af3333 solid;
        left: 2px;
        overflow: auto;
      }

      fieldset.elist ul > li {
        list-style-type: none;
        background-color: transparent;
      }

      fieldset.elist label {
        display: none;
        width: 100%;
      }

      fieldset.elist input[type="text"] {
        width: 100%;
        height: 30px;
        line-height: 30px;
        border: none;
        background-color: transparent;
        border-radius: 0;
      }
  
      fieldset.elist > legend {
        display: block;
        margin: 0;
        padding: 0 0 0 5px;
        position: absolute;
        width: 100%;
        cursor: default;
        background-color: #ccffcc;
        line-height: 30px;
        font-style: italic;
      }

      fieldset.elist:hover > legend {
        position: relative;
        overflow: hidden;
      }

      fieldset.elist > legend:after {
        width: 20px;
        content: "\2335";
        float: right;
        text-align: center;
        border-left: 2px #cccccc solid;
        font-style: normal;
        cursor: default;
      }

      fieldset.elist:hover > legend:after {
        background-color: #99ff99;
      }

      fieldset.elist ul input[type="radio"] {
        display: none;
      }

      fieldset.elist input[type="radio"]:checked ~ label {
        display: block;
        width: 292px;
        background-color: #ffffff;
      }

      fieldset.elist:hover input[type="radio"]:checked ~ label {
        width: 100%;
      }

      fieldset.elist:hover label {
        display: block;
        height: 100%;
      }

      fieldset.elist label:hover {
        background-color: #3333ff !important;
      }

      fieldset.elist:hover input[type="radio"]:checked ~ label {
        background-color: #aaaaaa;
      }
      div {
      	width: 700px;
		margin: 0 auto;
		padding: 0;
		background-color: #999999;
		border-radius:30px;
		box-shadow: 5px 5px 5px 5px #888888;
      }
    </style>
	</head>
	<body>
		<?php
			$sql = "select * from book_info where ISBN='$_REQUEST[id]'";
			$result = mysql_query($sql);
			$dbarr = mysql_fetch_array($result);
		?>
		<div>
			
		<form method="post" action="formEdit.php?do=edit2">
			<fieldset><legend><b><i>กรุณากรอกข้อมูลหนังสือที่ต้องการแก้ไข</i></b></legend>

				<table border="0" align="center" cellpadding="1" cellspecing="1">
					<tr><td align="right">หมายเลข ISBN: <font color='red'>*</font></td>
				 		<td><p><input type="text" name="isbn2" value="<?=$dbarr['ISBN']; ?>" maxlength="13"/></p></td>
				 	</tr>
				 	<tr><td align="right">Title: <font color='red'>*</font></td>
				 		<td><input type="text" name="title2" value="<?=$dbarr['Title']; ?>"/></td>
				 	</tr>
				 	<tr><td align="right">Author: <font color='red'>*</font></td>
				 		<td><input type="text" name="author2" value="<?=$dbarr['Author']; ?>"/></td>
				 	</tr>
				 	<tr><td align="right">Translator:</td>
				 		<td><input type="text" name="translator2" value="<?=$dbarr['Translator']; ?>"/></td>
				 	</tr>
				 	<tr><td align="right">Category: <font color='red'>*</font></td>
				 		<td><select name="category2">
        						<option value="s">Small</option>
        						<option value="m">Medium</option>
        						<option value="l">Large</option>
        						<option value="xl">Extra Large</option>
    						</select> </td>
    				</tr>
    				<tr><td align="right">Location: <font color='red'>*</font></td>
    					<td><input type="text" name="location2" value="<?=$dbarr['Location']; ?>"/></td>
    				</tr>
    				<tr><td align="right">Amount: <font color='red'>*</font></td>
    					<td><input type="text" name="amount2" value="<?=$dbarr['Amount']; ?>" maxlength="2"/></td>
    				</tr>
    				<tr><td align="right">Write a comment:</td>
    					<td><textarea name="comment2"><?=$dbarr['Detail']; ?></textarea></td>
    				</tr>
    			</table>
    			
    			<p align="center"><input type="submit" value="Update!" style="width:100px;height:40px;font-size: 18px;border-radius:15px;"/> 
    				&nbsp; 
    				<a href="admin.php?menu=2&do=edit">กลับหน้าเดิม</a>
    				<input type="hidden" name="id_edit" value="<?=$dbarr['ISBN'];?>"></p>

			</fieldset>
		</form>
		<?php
			if($_REQUEST['do'] == "edit2"){
				if($_REQUEST['isbn2'] == "" || $_REQUEST['title2'] == "" || $_REQUEST['author2'] == "" || $_REQUEST['category2'] == "" ||
          			$_REQUEST['location2'] == "" || $_REQUEST['amount2'] == ""){
            			echo "<font color='red'>**[กรุณากรอกข้อมูลหนังสือให้ครบถ้วน]</font>";
        		}else if(!(is_numeric($_REQUEST['isbn2']))){
            			echo "<font color='red'>**[หมายเลข ISBN ต้องเป็นตัวเลข เท่านั้น]</font>";
        		}else if(!(is_numeric($_REQUEST['amount2']))){
            			echo "<font color='red'>**[Amount ต้องเป็นตัวเลข เท่านั้น]</font>";
        		}else{
          				$sql_add = "update book_info set ISBN='$_REQUEST[isbn2]', Title='$_REQUEST[title2]', Author='$_REQUEST[author2]',
          				 Translator='$_REQUEST[translator2]', Category='$_REQUEST[category2]', Location='$_REQUEST[location2]', 
          				 Amount=$_REQUEST[amount2], Detail='$_REQUEST[comment2]' where ISBN='$_REQUEST[id_edit]'";
                     


                      
          				$result_add = mysql_query($sql_add);
          			if($result_add){
              			echo "<font color='green'><h4 align='center'>Update Successfully</h4></font>";
              			echo "<meta http-equiv='refresh' content='2;url=admin.php?menu=2&do=edit'>";
          			}else{
              			echo "<font color='red'><h3>Error Save</h3></font>";
              			
          			}
        		}
			}
			@include "closeDb.php";
		?>
	</div>
	</body>
</html>