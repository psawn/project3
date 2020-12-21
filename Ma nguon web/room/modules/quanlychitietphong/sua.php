<?php 
	include('config.php');
	$sql="SELECT * FROM `chitietphong` where id_phong='$_GET[id]'";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run); 
?>
<form action="modules/quanlychitietphong/xuly.php?id=<?php echo $dong['id_phong'] ?>" method="post" enctype="multipart/form-data">
<table width="400px" border="1" style="font-size:16px">
  <tr>
    <td colspan="2" style="background-color:#f2f2f2"><div align="center"><em>Sửa chi tiết phòng</em></div></td>
  </tr>
  <tr>
    <td width="150px">Số phòng</td>
    <td><input type="text" name="so_phong" readonly required value="<?php echo $dong['so_phong'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Tháng</td>
    <td><input type="number" name="thang" min="1" max="12" value="<?php echo $dong['thang'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Tên người thuê</td>
    <td><input type="text" name="ten_nguoi_thue" value="<?php echo $dong['ten_nguoi_thue'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Số điện thoại</td>
    <td><input type="text" name="so_dien_thoai" value="<?php echo $dong['so_dien_thoai'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Email</td>
    <td><input type="text" name="email" value="<?php echo $dong['email'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Mô tả</td>
    <td><textarea name="mo_ta" cols="30" rows="13" style="border: none"><?php echo $dong['mo_ta'] ?></textarea></td>
  </tr>
  <tr>
    <td width="150px">Điện </td>
    <td><input type="text" name="dien" value="<?php echo $dong['dien'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Nước</td>
    <td><input type="text" name="nuoc" value="<?php echo $dong['nuoc'] ?>"></td>
  </tr>
  <tr>
    <td width="150px">Dịch vụ</td>
    <td><input type="text" name="dich_vu" value="<?php echo $dong['dich_vu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2" class="btn">
    <div align="center">
    <button id="sua" name="sua" value="sua">Sửa</button>
    </div>
    </td>
  </tr>
</table>
</form>
<div class="goback_btn" onclick="goBack()">
      Go back
		<span></span>
      	<span></span>    
      	<span></span>
      	<span></span>
    </div>
<script>
function goBack() {
  window.history.back();
}
</script>
<style>
#sua{
	font-size:20px;
	background-color:#f2f2f2;
	cursor:pointer;
	width:100%;
	height:50px;
	margin:0 auto;
	border:none;
}
.btn {
	padding-left:0px;
}
div.goback_btn {
	top:120px;
	left:20px;
	position:absolute;
    color: #0066cc;
    font-size: 16px;
    border: 3px solid #0066cc;
    border-radius: 16px;
	padding:10px;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
	z-index: 1;
    transition: 0.5s;
	overflow:hidden;
	cursor:pointer;
}
.goback_btn span {
    position: absolute;
    width: 25%;
    height: 100%;
    background-color: #06C;
    transform: translateY(150%);
    border-radius: 50%;
    left: calc((var(--n) - 1) * 25%);
    transition: 0.5s;
    transition-delay: calc((var(--n) - 1) * 0.1s);
    z-index: -1;
}
div.goback_btn:hover {
	color: #ffffff;
}
div.goback_btn:hover span {
    transform: translateY(0) scale(2);
}
div.goback_btn span:nth-child(1) {
    --n: 1;
}
div.goback_btn span:nth-child(2) {
    --n: 2;
}
div.goback_btn span:nth-child(3) {
    --n: 3;
}
div.goback_btn span:nth-child(4) {
    --n: 4;
}
</style>
