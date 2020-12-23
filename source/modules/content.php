<div class="container content">
    <?php 
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];	
	}else {
		$tam='';	
	}if ($tam=='login') {
		include('login.php');	
	}if ($tam=='register') {
		include('register.php');	
	}if ($tam=='read_news') {
		include('modules/news/news.php');	
	}if ($tam=='about_us') {
		include('modules/about_us/about_us.php');	
	}if($tam=='thanhtoan') {
		include('modules/thanhtoan/thanhtoan.php');
	}if($tam=='nganluong') {
		include('checkout20.PHP/index.php');
	}
	?>
</div>