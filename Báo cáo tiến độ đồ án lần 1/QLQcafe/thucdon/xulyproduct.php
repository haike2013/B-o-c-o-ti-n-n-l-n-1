<?php 
	include('../connection.php');
	$id=$_GET['id'];
	$NameMenu=$_POST['NameMenu'];
	$price=$_POST['price'];
	$images=$_FILES['images']['name'];
	$images_tmp=$_FILES['images']['tmp_name'];
	move_uploaded_file($images_tmp,'uploads/'.$images);
	$unit=$_POST['unit'];
	
	if(isset($_POST['them'])){
		$sql="insert into menu (NameMenu,price,images,unit) value('$NameMenu','$price','$images','$unit')";	
		mysql_query($sql);
		header('location:../index.php?xem=thucdon&ac=them');
	}elseif(isset($_POST['sua'])){
		if($images!=''){
		$sql_sua="update menu set Namemenu='$NameMenu',price='$price',images='$images',unit='$unit' where id_menu='$id'";
	}else{
		$sql_sua="update menu set Namemenu='$NameMenu',price='$price',unit='$unit' where id_menu='$id'";
	}
		mysql_query($sql_sua);
		header('location:../index.php?xem=thucdon&ac=sua&id='.$id);
	}else{
		$sql_xoa="delete from menu where id_menu='$id'";
		mysql_query($sql_xoa);
		header('location:../index.php?xem=thucdon&ac=them');	
	}
	
?>