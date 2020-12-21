<?php 
	$user = $_SESSION['login'];
	include "config.php";
	$count_phong=1;
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
	
	$sql="select * from phong where user = '$user' limit $trang1,$count_phong";
	$run=mysqli_query($conn,$sql);
?>
<table width="900px" border="1">
  <tr>
    <td width="140"><div align="center">Số phòng</div></td>
    <td width="207"><div align="center">Địa chỉ</div></td>
    <td width="140"><div align="center">Diện tích</div></td>
    <td width="140"><div align="center">Giá phòng</div></td>
    <td colspan="3"><div align="center">Quản lý</div></td>
  </tr>
<?php
	while($dong=mysqli_fetch_array($run)){
?>  
  <tr>
    <td><?php echo $dong['so_phong'] ?></td>
    <td><?php echo $dong['dia_chi'] ?></td>
    <td><?php echo $dong['dien_tich'] ?></td>
    <td><?php echo $dong['gia_phong'] ?></td>
    <td width="89"><div align="center"><a href="index.php?quanly=quanlyphong&ac=sua&id=<?php echo $dong['so_phong'] ?>"><i class="far fa-edit button_color"></i></a></div></td>
    <td width="88"><div align="center"><a id="xoa" href="modules/quanlyphong/xuly.php?id=<?php echo $dong['so_phong'] ?>" onclick="return confirm('Bạn có chắc chắn xóa phòng này?')"><i class="far fa-trash-alt button_color"></i></a></div></td>
    <td><a href="index.php?quanly=quanlychitietphong&ac=lietke&id=<?php echo $dong['so_phong'] ?>">Chi tiết</a></td>
  </tr>
 <?php
}
?>	
</table>
<div style="margin-left:35px">
 Trang:
<?php
	$sql_trang=mysqli_query($conn,"select * from phong where user = '$user'");
	$count=mysqli_num_rows($sql_trang);
	$a=ceil($count/$count_phong);
	
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?quanly=quanlyphong&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '. '</a>';
	}
?>
</div>
<style>

a {
	text-decoration:none;
	color:#343132;
}
.button_color {
	color:rgba(77, 140, 203, 0.9);
}
</style>