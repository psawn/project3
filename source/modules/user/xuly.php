<?php 
	include('config.php');
	if(isset($_POST['signup'])) {
		$username=$_POST['username'];
		$password=hash("sha512",$_POST['password']);
		$email=$_POST['email'];
		$so_dien_thoai=$_POST['so_dien_thoai'];
		
		$sql_search="select * from taikhoan where username='$username'";
		$query_search=mysqli_query($conn,$sql_search);
		
		if($count=mysqli_num_rows($query_search)==0) {
		$sql="insert into taikhoan(username,password,email,so_dien_thoai) values('$username','$password','$email','$so_dien_thoai') ";
		mysqli_query($conn,$sql);
		header('location:http://localhost:9000/home.php?ac=login');
		}else {
			echo "<script>
			alert('Tài khoản đã tồn tại!');
			window.history.back();
			</script>";
		}
	}
?>