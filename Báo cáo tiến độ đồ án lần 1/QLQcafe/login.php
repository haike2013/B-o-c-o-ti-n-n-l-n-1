<?php
	include('connection.php');
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$sql="select * from user where username='$username' and pass='$pass' limit 1";
		$query=mysql_query($sql);
		$nums=mysql_num_rows($query);	
		if($nums>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php');	
		}else{
			header('location:login.php');
				
		}
	}
?>

<form action="" method="post">
<center><table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Login</div></td>
  </tr>
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" size="20"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pass" size="20"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="login" id="button" value="Login">
      </div>
    </form></td>
  </tr>
</table></center></form>