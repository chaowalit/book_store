<?php
	$dbhost="localhost";
	$dbuser='root';
	$dbpass='1234';
	$dbname='bookstore_db';

	$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die("ไม่สามารถเชื่อมต่อโฮสต์ได้");
	mysql_select_db($dbname) or die (ไม่สามารถเชื่อมต่อฐานข้อมูลได้);
	mysql_query("SET NAMES UTF8",$conn);
?>