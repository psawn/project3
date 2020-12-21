<?php 
	$user = $_SESSION['login'];
	include('config.php');
	$sql = "SELECT * FROM chitietphong,thanhtoan,phong WHERE chitietphong.so_phong=phong.so_phong and chitietphong.id_phong=thanhtoan.id_phong and chitietphong.user=phong.user and chitietphong.user='$user'";
	$run=mysqli_query($conn,$sql);
?>

<table width="90%" border="1">
  <tr>
    <td>Tháng</td>
    <td>Số phòng</td>
    <td>Tên người thuê</td>
    <td>Số điện thoại</td>
    <td>Tổng</td>
    <td colspan="2">Đã thanh toán</td>
  </tr>
<?php
	$i=0;
	while($dong=mysqli_fetch_array($run) ){
	$i++;
?>  
  <tr>
    <td><?php echo $dong['thang'] ?></td>
    <td><?php echo $dong['so_phong'] ?></td>
    <td><?php echo $dong['ten_nguoi_thue'] ?></td>
    <td><?php echo $dong['so_dien_thoai'] ?></td>
    <td><?php echo $dong['gia_phong'] + $dong['dien'] + $dong['nuoc'] + $dong['dich_vu']?></td>
    
    <form action="modules/quanlytien/xuly.php?id=<?php echo $dong['id_phong'] ?>" method="post">
    <td> 
    <input type="radio" name="optradio[]" value="yes" <?php if($dong['da_thanh_toan'] =="yes") print "checked" ?> >
    <label>Yes</label>
    <input type="radio" name="optradio[]" value="no" <?php if($dong['da_thanh_toan'] =="no") print "checked" ?>> 
    <label>No</label>
    </td>
    <td>
    	<button type="submit" id="sua" name="sua" value="sua">Sửa</button>
    </td>
    </form>
  </tr>
<?php
	}
?>
</table>

