 <?php
 	if(isset($_GET['ac'])&&$_GET['ac']=='dangxuat'){
		unset($_SESSION['dangnhap']);//bỏ duy nhất session dc chỉ định
		header('location:login.php');
	}
 ?>
<div class="content">
    		<div class="left">
            		<ul>
                   <li><a href="index.php?xem=dashboard">Tổng quan</a></li>
                   <li><a href="">Hóa đơn</a></li>
                   <li><a href="">Hàng hóa</a></li>
                   <li><a href="">Phòng/Bàn</a></li>
                   <li><a href="">Khách hàng/NCC</a></li>
                   <li><a href="index.php?xem=thucdon&ac=them">Thực đơn</a></li>
                   <li><a href="">Nhập kho</a></li>
                   <li><a href="">Chuyển kho</a></li>
                   <li><a href="">Phiếu thu</a></li>
                   <li><a href="index.php?xem=dashboard">Phiếu chi</a></li>
                   <li><a href="index.php?xem=dashboard">Doanh thu</a></li>
                   <li><a href="index.php?xem=dashboard">Thiết lập</a></li>
                    </ul>
            	</div>
            <div class="right">
            	<?php
					if(isset($_GET['xem'])){
					$tam=$_GET['xem'];	
					}else{
					$tam='';	
					}if($tam=='dashboard'){
						include('dashboard.php');	
					}elseif($tam=='thucdon'){
						include('thucdon/mainproduct.php');	
					}
				?>
            </div>
            
            </div>