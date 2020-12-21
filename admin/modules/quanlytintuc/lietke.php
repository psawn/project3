<?php 
	include('config.php');
	$count_phong=4;
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
	
	$sql="select * from tintuc order by id_tintuc limit $trang1,$count_phong";
	$run=mysqli_query($conn,$sql);
?>
<table width="95%" border="1">
  <tr>
    <td width="30px">ID</td>
    <td width="130px">Title</td>
    <td width="150px">Hình ảnh</td>
    <td width="300px">Mô tả</td>
    <td width="70px">Giá </td>
    <td width="70px">Diện tích</td>
    <td width="70px">Địa chỉ</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run)){ 
  ?>
  <tr>
    <td><?php echo $i+$count_phong*($_GET['trang']-1) ?></td>
    <td><?php echo $dong['title']; ?></td>
    <td><img src="modules/quanlytintuc/uploads/<?php echo $dong['hinh_anh'] ?>" width="85%" ></td>
    <td><?php echo $dong['mo_ta']; ?></td>
    <td><?php echo $dong['gia'] ?></td>
    <td><?php echo $dong['dien_tich'] ?></td>
    <td><?php echo $dong['dia_chi'] ?></td>
    <td><a href="index.php?ac=sua&id=<?php echo $dong['id_tintuc'] ?>&trang=<?php echo $_GET['trang'] ?>"><i class="far fa-edit button_color"></i></a></td>
    <td><a href="modules/quanlytintuc/xuly.php?id=<?php echo $dong['id_tintuc'] ?>" onclick="return confirm('Bạn có chắc chắn xóa phòng này?')"><i class="far fa-trash-alt button_color"></i></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
Trang:
<?php
	$sql_trang=mysqli_query($conn,"select * from tintuc");
	$count=mysqli_num_rows($sql_trang);
	$a=ceil($count/$count_phong);
	
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '. '</a>';
	}
?>
<style>
.button_color{
	color:rgba(77, 140, 203, 0.9);
}
</style>