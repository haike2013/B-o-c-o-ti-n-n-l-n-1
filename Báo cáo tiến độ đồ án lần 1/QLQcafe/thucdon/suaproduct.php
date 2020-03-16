<?php
	$sql="select * from menu where id_menu='$_GET[id]' ";
	$run=mysql_query($sql);
	$row=mysql_fetch_array($run);
?>
<form action="thucdon/xulyproduct.php?id=<?php echo $row['id_menu'] ?>" method="post" enctype="multipart/form-data">
  <div align="center">
    <table width="100%" border="1">
      <tr>
        <td colspan="2"><div align="center">Danh sách sửa menu</div></td>
      </tr>
      <tr>
        
        <td><div align="center">Mã</div></td>
        <td><div align="justify">
          <input type="text" name="id_menu" value="<?php echo $row['id_menu'] ?>">
        </div></td>
      </tr>
      <tr>
        
        <td><div align="center">Tên sp</div></td>
        <td><div align="justify">
          <input type="text" name="NameMenu" value="<?php echo $row['NameMenu'] ?>">
        </div></td>
      </tr>
      <tr>
        
        <td><div align="center">Giá</div></td>
        <td><div align="justify">
          <input type="text" name="price" value="<?php echo $row['price'] ?>">
        </div></td>
      </tr>
      <tr>
        
        <td><div align="center">Hình ảnh</div></td>
        <td><div align="justify">
          <input type="file" name="images"><img src="images<?php echo $row['images'] ?>"  />
        </div></td>
      </tr>
      <tr>
        
        <td><div align="center">Unit</div></td>
        <td><div align="justify">
          <input type="text" name="unit" value="<?php echo $row['unit'] ?>">
        </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <input type="submit" name="sua" id="sua" value="Sửa">
        </div>      <div align="justify"></div></td>
      </tr>
  </table>
  </div>
 
</form>

<div class="return">
 	<a href="index.php?xem=thucdon&ac=them">Quay về</a>
 </div>