<?php
  include "checksession.php";
  include "connectionDb.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
		<title>Add Book Store</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

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
        border: 2px #af3333 solid;
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

    </style>
	</head>
	<body>
		<form method="post" action="admin.php?menu=1&do=add&doing=add">
			<fieldset><legend><b><i>กรุณากรอกข้อมูลหนังสือที่ต้องการเพิ่ม</i></b></legend>

				<table border="0" align="center" cellpadding="1" cellspecing="1">
					<tr><td align="right">หมายเลข ISBN: <font color='red'>*</font></td>
				 		<td><p><input type="text" name="isbn" maxlength="13"/></p></td>
				 	</tr>
				 	<tr><td align="right">Title: <font color='red'>*</font></td>
				 		<td><input type="text" name="title" /></td>
				 	</tr>
				 	<tr><td align="right">Auther: <font color='red'>*</font></td>
				 		<td><input type="text" name="author" /></td>
				 	</tr>
				 	<tr><td align="right">Translator:</td>
				 		<td><input type="text" name="translator" /></td>
				 	</tr>
				 	<tr><td align="right">Category: <font color='red'>*</font></td>
				 		<td><select name="category">
        						<option value="s">Small</option>
        						<option value="m">Medium</option>
        						<option value="l">Large</option>
        						<option value="xl">Extra Large</option>
    						</select> </td>
    				</tr>
    				<tr><td align="right">Location: <font color='red'>*</font></td>
    					<td><input type="text" name="location" /></td>
    				</tr>
    				<tr><td align="right">Amount: <font color='red'>*</font></td>
    					<td><input type="text" name="amount" maxlength="2"/></td>
    				</tr>
    				<tr><td align="right">Write a comment:</td>
    					<td><textarea name="comment"></textarea></td>
    				</tr>
    			</table>
    			
    			<p><input type="submit" value="บันทึก!" style="width:100px;height:40px;font-size: 18px;border-radius:15px;"/> 
    				&nbsp; 
    				<input type="reset" value="ยกเลิก" style="width:100px;height:40px;font-size: 18px;border-radius:15px;"/></p>

			</fieldset>
		</form>
	</body>
</html>

<?php
    if($_REQUEST['doing'] == "add"){
        if($_REQUEST['isbn'] == "" || $_REQUEST['title'] == "" || $_REQUEST['author'] == "" || $_REQUEST['category'] == "" ||
          $_REQUEST['location'] == "" || $_REQUEST['amount'] == ""){
            echo "<font color='red'>**[กรุณากรอกข้อมูลหนังสือให้ครบถ้วน]</font>";
        }else if(!(is_numeric($_REQUEST['isbn']))){
            echo "<font color='red'>**[หมายเลข ISBN ต้องเป็นตัวเลข เท่านั้น]</font>";
        }else if(!(is_numeric($_REQUEST['amount']))){
            echo "<font color='red'>**[Amount ต้องเป็นตัวเลข เท่านั้น]</font>";
        }else{
          $sql_add = "insert into book_info (ISBN, Title, Author, Translator, Category, Location, Amount, Detail)
                      values('$_REQUEST[isbn]','$_REQUEST[title]','$_REQUEST[author]','$_REQUEST[translator]',
                            '$_REQUEST[category]','$_REQUEST[location]',$_REQUEST[amount],'$_REQUEST[comment]')";
          $result_add = mysql_query($sql_add);
          if($result_add){
              echo "<h3>Save Successfully</h3>";
              echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
          }else{
              echo "<h3>Error Save</h3>";
              echo "<meta http-equiv='refresh' content='1;url=admin.php?menu=1&do=add'>";
          }
        }
    }
    @include "closeDb.php";
?>