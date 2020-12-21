<?php 
	include('config.php');
	if(isset($_POST['search'])) {
		$so_dien_thoai=$_POST['so_dien_thoai'];
		$sql= "SELECT * FROM phong,chitietphong,thanhtoan WHERE phong.so_phong=chitietphong.so_phong AND phong.user = chitietphong.user AND thanhtoan.id_phong=chitietphong.id_phong AND so_dien_thoai='$so_dien_thoai'";
		$query=mysqli_query($conn,$sql);
		
	}
?>
<table width="90%" border="1">
  <tr>
    <td width="80">Tháng</td>
    <td width="100">Giá phòng</td>
    <td width="80">Điện </td>
    <td width="80">Nước</td>
    <td width="80">Dịch vụ</td>
    <td width="80">Tổng</td>
    <td colspan="2">Thanh toán</td>
  </tr>
  	<?php 
  		if(isset($_POST['search'])&&$count=mysqli_num_rows($query) ==0){ ?>
			<p>Không tìm thấy số điện thoại</p>
	<?php
	} else {
	?>
    <?php 
		while(isset($_POST['search'])&&$dong=mysqli_fetch_array($query)) {
	?>
  <tr>
    <td><?php echo $dong['thang'] ?></td>
    <td><?php echo $dong['gia_phong'] ?></td>
    <td><?php echo $dong['dien'] ?></td>
    <td><?php echo $dong['nuoc'] ?></td>
    <td><?php echo $dong['dich_vu'] ?></td>
    <td><?php echo $dong['gia_phong'] + $dong['dien'] + $dong['nuoc'] + $dong['dich_vu']?></td>
    <td width="125"><a href="home.php?ac=nganluong&so_dien_thoai=<?php echo $_POST['so_dien_thoai'] ?>&tong=<?php echo $dong['gia_phong'] + $dong['dien'] + $dong['nuoc'] + $dong['dich_vu'] ?>"><span <?php if($dong['da_thanh_toan'] =="yes") print 'class="disabled"' ?>>Ngân lượng</span></a></td>
    <td><a href="modules/thanhtoan/paypal.php?tong=<?php echo $dong['gia_phong']+ $dong['dien'] + $dong['nuoc'] + $dong['dich_vu'] ?> "><span <?php if($dong['da_thanh_toan'] =="yes") print 'class="disabled"' ?>><i class="fab fa-cc-paypal big-icon"></i></span></a>
	</td>
  </tr>
  	<?php
		}
	}
	?>
</table>

<style>
.disabled {
	pointer-events: none;
  	cursor: default;
  	opacity: 0.7;
	color:red;
	text-decoration:line-through;
}
.big-icon {
	font-size:30px;	
}
.small {
	width:100px;
	height:20px;
}
</style>
