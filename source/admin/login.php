<?php 
	include('modules/config.php');
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=hash("sha512",$_POST['password']);
		$sql = "select * from admin where username='$username' and password='$password'";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);	
		if($nums>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php'); 
		}else {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Mời nhập lại tài khoản hoặc mật khẩu');";
			echo "</script>";

			$URL="http://localhost:8080/techweb/admin/login.php";
			echo "<script>location.href='$URL'</script>";
		}	
	}
	
?>
<form action="" method="post">
<center>
<table width="300px" border="1">
  <tr>
    <td width="120px">Tài khoản</td>
    <td><input type="text" name="username" ></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input type="password" name="password" ></td>
  </tr>
</table>
<button type="submit" name="login" id="login" value="Login">Login</button>
</center>
</form>
