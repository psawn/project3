<div class="container content">
    <?php 
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];	
	}else {
		$tam='';	
	}if ($tam=='quanlyphong') {
		include('modules/quanlyphong/main.php');	
	}if ($tam=='quanlychitietphong') {
		include('modules/quanlychitietphong/main.php');	
	}if ($tam=='quanlytien') {
		include('modules/quanlytien/lietke.php');
	}
	?>
</div>