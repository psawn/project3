<div class="container content">
    <div class="left">
    	<?php if(isset($_GET['ac'])){
				$tam=$_GET['ac'];	
			}else 
			{
				$tam='';
			} if($tam=='sua'){
				include('modules/quanlytintuc/sua.php');
			} if($tam=='') {
				include('modules/quanlytintuc/them.php');
			}
			?>
    </div>
    <div class="right">
    	<?php include('quanlytintuc/lietke.php') ?>
    </div>
</div>