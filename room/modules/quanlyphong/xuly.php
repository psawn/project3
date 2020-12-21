<?php 
	session_start();
?>
<?php 
	include('../config.php');
	if(isset($_POST['them'])){
		$so_phong=$_POST['so_phong'];
		$dia_chi=$_POST['dia_chi'];
		$dien_tich=$_POST['dien_tich'];
		$gia_phong=$_POST['gia_phong'];
		$user=$_SESSION['login'];
		$sql_search="select so_phong from phong where so_phong = '$so_phong' and user ='$user'";	
		$query_search=mysqli_query($conn,$sql_search);
		if($count=mysqli_num_rows($query_search)==0){
			$sql="INSERT INTO `phong` (`so_phong`, `dia_chi`, `dien_tich`, `gia_phong`, `user`) VALUES ('$so_phong', '$dia_chi', '$dien_tich', '$gia_phong', '$user')";
			mysqli_query($conn,$sql);
			header('location:../../index.php?quanly=quanlyphong&ac=them');
		}else {
			echo "<script>
window.location.href='http://localhost:8080/techweb/room/index.php?quanly=quanlyphong&ac=them';
			alert('Phòng đã tồn tại. Mời nhập lại!');
</script>";
		}
	}else if(isset($_POST['sua'])){
		$so_phong=$_POST['so_phong'];
		$dia_chi=$_POST['dia_chi'];
		$dien_tich=$_POST['dien_tich'];
		$gia_phong=$_POST['gia_phong'];
		$user = $_SESSION['login'];
		$id=$_GET['id'];
		$sql="update phong set so_phong='$so_phong',dia_chi='$dia_chi',dien_tich='$dien_tich',gia_phong='$gia_phong' where so_phong='$id' and user='$user'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyphong&ac=sua&id='.$id);
	}else {
		$user = $_SESSION['login'];
		$id=$_GET['id'];
		$sql="DELETE phong.*, chitietphong.* FROM phong LEFT JOIN chitietphong ON phong.so_phong = chitietphong.so_phong WHERE phong.so_phong ='$id' and phong.user='$user'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyphong&ac=them');
	}
?>