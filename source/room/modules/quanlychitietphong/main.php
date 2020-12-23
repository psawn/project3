<?php 
	if(isset($_GET['ac'])) {
		$tam=$_GET['ac'];	
	}else {
		$tam='';	
	}if($tam=='lietke') {
		include('modules/quanlychitietphong/lietke.php');
	}
	if($tam=='them') {
		include('modules/quanlychitietphong/them.php');
	}
	if($tam=='themcu') {
		include('modules/quanlychitietphong/themcu.php');
	}
	if($tam=='sua'){
		include('modules/quanlychitietphong/sua.php');
	}if($tam=='hoadon'){
		include('modules/quanlychitietphong/hoadon.php');
	}if($tam=='mail') {
		include('modules/quanlychitietphong/mail_window.php');
	}if($tam=='mail-gg') {
		include('modules/quanlychitietphong/mail.php');
	}
?>
