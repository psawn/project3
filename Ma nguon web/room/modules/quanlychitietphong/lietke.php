<?php 
	$user = $_SESSION['login'];
	include('config.php');
	$count_phong=10;
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	} else {
		$_GET['trang']=1;
		$get_trang='';
	}
	if($get_trang ==''||$get_trang==1){
		$trang1=0;
	} else {
		$trang1=($get_trang*$count_phong)-$count_phong;	
	}
	
	$sql="select * from chitietphong where so_phong = $_GET[id] and user = '$user' limit $trang1,$count_phong";
	$run=mysqli_query($conn,$sql);
?>
<div class="quanlychitietphong">
	<h3>Số phòng: <?php echo $_GET['id'] ?></h3>
    <div class="them_btn">
    <a href="index.php?quanly=quanlychitietphong&ac=themcu&id=<?php echo $_GET['id'] ?>" title="NGƯỜI THUÊ CŨ"><i class="fas fa-user"></i></a>
	<a href="index.php?quanly=quanlychitietphong&ac=them&id=<?php echo $_GET['id'] ?>" title="NGƯỜI THUÊ MỚI"><i class="far fa-plus-square"></i></a>
    </div>
</div>
<table width="95%" border="1">
  <tr>
    <td width="60px">Tháng</td>
    <td width="180px">Tên người thuê</td>
    <td width="180px">Số điện thoại</td>
    <td width="180px">Email</td>
    <td width="">Mô tả</td>
    <td width="65px">Điện </td>
    <td width="65px">Nước</td>
    <td width="65px">Dịch vụ</td>
    <td width="" colspan="5">Quản lý</td>
  </tr>
<?php
	while($dong=mysqli_fetch_array($run)){
?>  
  <tr>
    <td><?php echo $dong['thang'] ?></td>
    <td><?php echo $dong['ten_nguoi_thue'] ?></td>
    <td><?php echo $dong['so_dien_thoai'] ?></td>
    <td><?php echo $dong['email'] ?></td>
    <td><?php echo $dong['mo_ta'] ?></td>
    <td><?php echo $dong['dien'] ?></td>
    <td><?php echo $dong['nuoc'] ?></td>
    <td><?php echo $dong['dich_vu'] ?></td>
    <td width="30px"><a href="index.php?quanly=quanlychitietphong&ac=sua&id=<?php echo $dong['id_phong'] ?>" title="SỬA"><i class="far fa-edit button_color"></i></a></td>
    <td width="30px"><a href="modules/quanlychitietphong/xuly.php?id=<?php echo $dong['id_phong'] ?>&so_phong=<?php echo $_GET['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa phòng này?')" title="XÓA"><i class="far fa-trash-alt button_color"></i></a></td>
   <td width="30px"><a href="index.php?quanly=quanlychitietphong&ac=hoadon&id=<?php echo $dong['id_phong'] ?>" title="HÓA ĐƠN"><i class="fas fa-dollar-sign button_color"></i></a></td>
  <td width="30px"><a href="index.php?quanly=quanlychitietphong&ac=mail&email=<?php echo $dong['email'] ?>" title="WINDOWS MAIL"><i class="far fa-envelope-open button_color"></i></a></td>
  <td width="30px"><a href="index.php?quanly=quanlychitietphong&ac=mail-gg&email=<?php echo $dong['email'] ?>"><i class="far fa-envelope button_color" title="GMAIL"></i></a></td>
  </tr>
<?php
	}
?>
</table>
<div style="margin-left:35px">
 Trang:
<?php
	$sql_trang=mysqli_query($conn,"select * from chitietphong where so_phong = $_GET[id] and user = '$user'");
	$count=mysqli_num_rows($sql_trang);
	$a=ceil($count/$count_phong);
	
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?quanly=quanlychitietphong&ac=lietke&id='.$_GET['id'].'&trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '. '</a>';
	}
?>
</div>
<style>
.quanlychitietphong {
	width:95%;
	margin:10px auto ;
	font-size:25px;
	padding-bottom:15px;
}
.quanlychitietphong h3{
	float:left;
	font-size:20px;
}
.them_btn{
	float:right;
}
.them_btn i {
	color:#06C
}
.button_color {
	color:rgba(77, 140, 203, 0.9);
}
</style>