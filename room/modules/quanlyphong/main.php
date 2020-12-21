<div class="left">
	<?php 
		if(isset($_GET['ac'])) {
			$tam=$_GET['ac'];	
		}else {
			$tam='';	
		}if($tam=='them') {
			include('modules/quanlyphong/them.php');
		}if($tam=='sua') {
			include('modules/quanlyphong/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modules/quanlyphong/lietke.php');
	?>
</div>