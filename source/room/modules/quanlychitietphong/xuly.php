<?php 
	session_start();
?>
<?php 
	
	include('../config.php');
	if(isset($_POST['them'])) {
		//them
		$so_phong=$_POST['so_phong'];
		$thang=$_POST['thang'];
		$ten_nguoi_thue=$_POST['ten_nguoi_thue'];
		$so_dien_thoai=$_POST['so_dien_thoai'];
		$email=$_POST['email'];
		$mo_ta=$_POST['mo_ta'];
		$dien=$_POST['dien'];
		$nuoc=$_POST['nuoc'];
		$dich_vu=$_POST['dich_vu'];
		$user=$_SESSION['login'];
		
		$sql_search="select so_phong from chitietphong where so_phong = '$so_phong' and thang = '$thang' and user = '$user' ";
		$query_search=mysqli_query($conn,$sql_search);
		
		if($count=mysqli_num_rows($query_search)==0){
			$sql="INSERT INTO `chitietphong` (`so_phong`, `thang`, `ten_nguoi_thue`, `so_dien_thoai`, `email`, `mo_ta`, `dien`, `nuoc`, `dich_vu`, `user`) VALUES ('$so_phong', '$thang', '$ten_nguoi_thue', '$so_dien_thoai', '$email', '$mo_ta', '$dien', '$nuoc', '$dich_vu', '$user');";
			mysqli_query($conn,$sql);
			$sql1="INSERT INTO thanhtoan(id_phong,user) SELECT id_phong,user FROM chitietphong EXCEPT (SELECT id_phong,user FROM thanhtoan)";
			mysqli_query($conn,$sql1);
			header('location:http://localhost:8080/techweb/room/index.php?quanly=quanlychitietphong&ac=lietke&id='.$so_phong);

		}else {
			echo "<script>
			alert('Phòng đã tồn tại. Mời nhập lại!');
			window.history.back();
</script>";
		}
	}else if(isset($_POST['themcu'])) {
		//them cu
		$so_phong=$_POST['so_phong'];
		$thang=$_POST['thang'];
		$ten_nguoi_thue=$_POST['ten_nguoi_thue'];
		$so_dien_thoai=$_POST['so_dien_thoai'];
		$email=$_POST['email'];
		$mo_ta=$_POST['mo_ta'];
		$dien=$_POST['dien'];
		$nuoc=$_POST['nuoc'];
		$dich_vu=$_POST['dich_vu'];
		$user=$_SESSION['login'];
		
		$sql_search="select so_phong from chitietphong where so_phong = '$so_phong' and thang = '$thang' and user = '$user'";
		$query_search=mysqli_query($conn,$sql_search);
		
		if($count=mysqli_num_rows($query_search)==0){
		$sql="INSERT INTO `chitietphong` (`so_phong`, `thang`, `ten_nguoi_thue`, `so_dien_thoai`, `email`, `mo_ta`, `dien`, `nuoc`, `dich_vu`, `user`) VALUES ('$so_phong', '$thang', '$ten_nguoi_thue', '$so_dien_thoai', '$email', '$mo_ta', '$dien', '$nuoc', '$dich_vu', '$user');";
		mysqli_query($conn,$sql);
		$sql1="INSERT INTO thanhtoan(id_phong,user) SELECT id_phong,user FROM chitietphong EXCEPT (SELECT id_phong,user FROM thanhtoan)";
		mysqli_query($conn,$sql1);
		header('location:http://localhost:8080/techweb/room/index.php?quanly=quanlychitietphong&ac=lietke&id='.$so_phong);
		}else {
			echo "<script>
			alert('Phòng đã tồn tại. Mời nhập lại!');
			window.history.back();
</script>";
		}
	}else if (isset($_POST['sua'])) {
		//sua
		$id=$_GET['id'];
		$so_phong=$_POST['so_phong'];
		$thang=$_POST['thang'];
		$ten_nguoi_thue=$_POST['ten_nguoi_thue'];
		$so_dien_thoai=$_POST['so_dien_thoai'];
		$email=$_POST['email'];
		$mo_ta=$_POST['mo_ta'];
		$dien=$_POST['dien'];
		$nuoc=$_POST['nuoc'];
		$dich_vu=$_POST['dich_vu'];
		$user=$_SESSION['login'];
		
		$sql="update chitietphong set so_phong ='$so_phong',thang='$thang',ten_nguoi_thue='$ten_nguoi_thue',so_dien_thoai='$so_dien_thoai',email='$email',mo_ta='$mo_ta',dien='$dien',nuoc='$nuoc',dich_vu='$dich_vu' where id_phong='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietphong&ac=lietke&id='.$so_phong);
		
	}
	else {
		//xoa
		$user=$_SESSION['login'];
		$id=$_GET['id'];
		$sql="delete from chitietphong where id_phong='$id' and user='$user'";
		mysqli_query($conn,$sql);		
		header('location:http://localhost:8080/techweb/room/index.php?quanly=quanlychitietphong&ac=lietke&id='.$_GET['so_phong']);
	}
?>