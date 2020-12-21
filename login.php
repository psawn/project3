<?php 
	include('modules/config.php');
	session_start();
	if(isset($_POST['signin'])) {
		$username=$_POST['username'];
		$password=hash("sha512",$_POST['password']);
		$sql="select * from taikhoan where username='$username' and password='$password' limit 1 ";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['login']=$username;
			header('location:http://localhost:9000/room/index.php');
		}else {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Mời nhập lại tài khoản hoặc mật khẩu');";
			echo "</script>";
			$URL="http://localhost:9000/home.php?ac=login";
			echo "<script>location.href='$URL'</script>";	
		}
	}
?>
<meta name="google-signin-client_id" content="233913994365-ctmb62jo6nm4covndv05g7vtq5nbmsi4.apps.googleusercontent.com" />
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" type="text/css" href="room/libs/bootstrap-3.3.7/css/bootstrap.css" />
<form action="" method="post" class="form-login">
  	<div class="form-group">
    	<label>User Name</label>
    	<input type="text" class="form-control" id="username" name="username">
  	</div>
  	<div class="form-group">
    	<label>Password</label>
    <input type="password" class="form-control" id="password" name="password">
  	</div>
  	<center>
  		<button type="submit" class="btn btn-primary" name="signin">Sign In </button>
        <h5>Or</h5>
        <a href="home.php?ac=register" class="btn btn-danger">Sign Up</a>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
  	</center>
</form>
<script>
	function onSignIn(googleUser) {
		window.location.href='http://localhost:9000/room/index.php';
	}
</script>
<style>
.form-login {
	margin-top:30px;
}
</style>