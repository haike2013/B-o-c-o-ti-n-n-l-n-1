<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='qlqcafe';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>