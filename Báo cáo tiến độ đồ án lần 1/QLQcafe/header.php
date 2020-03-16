<?php
 	if(isset($_GET['ac'])&&$_GET['ac']=='dangxuat'){
		unset($_SESSION['dangnhap']);//bỏ duy nhất session dc chỉ định
		header('location:login.php');
	}
 ?>
<div class="header">
	<ul>
    	<li style="text-align:right"><a href="index.php?ac=dangxuat">Đăng xuất</a></li>
    </ul>
</div>