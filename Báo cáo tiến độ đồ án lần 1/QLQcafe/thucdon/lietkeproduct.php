<?php
	$sql_lietke="select * from menu order by menu.id_menu";
	$run_lietke=mysql_query($sql_lietke);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">Mã</div></td>
    <td><div align="center">Tên sp</div></td>
    <td><div align="center">Giá</div></td>
    <td><div align="center">Hình ảnh</div></td>
    <td><div align="center">Unit</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  	$i=0;
	while($row=mysql_fetch_array($run_lietke)){
  ?>
  <tr>
    <td><?php echo $row['id_menu'] ?></td>
    <td><?php echo $row['NameMenu'] ?></td>
    <td><?php echo $row['price'] ?></td>
    <td><img src="thucdon/images/<?php echo $row['images'] ?>" width="50" height="50"></td>
    <td><?php echo $row['unit'] ?></td>
    <td><div align="center"><a href="index.php?xem=thucdon&ac=sua&id=<?php echo $row['id_menu'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="thucdon/xulyproduct.php?id=<?php echo $row['id_menu'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>

