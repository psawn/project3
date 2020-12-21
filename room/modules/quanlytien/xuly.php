<?php 
	include('config.php');	
	$id=$_GET['id'];
	$da_thanh_toan=$_POST['optradio'];
	foreach ($_POST['optradio'] as $optNum => $option) {
    	$sql="update thanhtoan set da_thanh_toan='$option' where id_phong='$id'";
		mysqli_query($conn,$sql);
		header('location:http://localhost:8080/techweb/room/index.php?quanly=quanlytien');
	}
	
?>