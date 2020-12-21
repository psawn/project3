<?php 
	include('config.php');
	$id=$_GET['id'];
	$title=$_POST['title'];
	$mo_ta=$_POST['mo_ta'];
	$gia=$_POST['gia'];
	$dien_tich=$_POST['dien_tich'];
	$dia_chi=$_POST['dia_chi'];
	$hinh_anh=$_FILES['hinh_anh']['name'];
	$hinh_anh_tmp=$_FILES['hinh_anh']['tmp_name'];
	move_uploaded_file($hinh_anh_tmp,'uploads/'.$hinh_anh); 
	if(isset($_POST['them'])){
		//them
		$sql="insert into tintuc (title,mo_ta,gia,dien_tich,dia_chi,hinh_anh) values ('$title','$mo_ta','$gia','$dien_tich','$dia_chi','$hinh_anh')";
		mysqli_query($conn,$sql);
		header('location:../../index.php');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinh_anh!=''){
		$sql="update tintuc set title='$title',mo_ta='$mo_ta',gia='$gia',dien_tich='$dien_tich',dia_chi='$dia_chi',hinh_anh='$hinh_anh' where id_tintuc='$id'";
		}else {
			$sql="update tintuc set title='$title',mo_ta='$mo_ta',gia='$gia',dien_tich='$dien_tich',dia_chi='$dia_chi' where id_tintuc='$id'";
		}
		mysqli_query($conn,$sql);
		header('location:../../index.php?ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from tintuc where id_tintuc='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php');
	}
?>