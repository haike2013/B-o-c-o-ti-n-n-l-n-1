<div class="top">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];	
		}else{
			$tam="";	
		}if($tam=='them'){
			include('thucdon/product.php');	
		}if($tam=='sua'){
			include('thucdon/suaproduct.php');	
		}
	?>
</div>

<div class="bottom">
	<?php
		include('thucdon/lietkeproduct.php');
	?>
</div>