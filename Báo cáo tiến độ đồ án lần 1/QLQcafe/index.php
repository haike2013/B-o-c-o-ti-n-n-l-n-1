<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Quản lý quán cà phê</title>
</head>

<body>
<?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('location:login.php');	
	}
?>
	<div class="wrapper">
    		
            <?php
			include('connection.php');
			include('header.php');
			include('content.php');
			
			?>
    	</div>
</body>
</html>