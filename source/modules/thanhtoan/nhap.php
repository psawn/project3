<?php 
	include('config.php');
	if(isset($_POST['search'])) {
		$so_dien_thoai=$_POST['so_dien_thoai'];
	}
?>
<form action="" method="post" enctype="multipart/form-data">
<div class="search-form">
<input class="thanhtoan-btn" type="text" id="so_dien_thoai" name="so_dien_thoai" placeholder="Nhập số điện thoại" value="<?php if(isset($_POST['search']))  echo $so_dien_thoai ?>"/><input class="thanhtoan-btn" type="submit" name="search" id="searchbtn" value="Search" placeholder="Search..." />
</div>
</form>
<style>
.thanhtoan-btn {
	border:1px solid #000000;
	margin-top:20px;
}
</style>