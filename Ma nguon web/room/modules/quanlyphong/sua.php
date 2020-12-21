<link rel="stylesheet" href="../../../libs/fontawesome/css/all.css" />
<?php 
	$user=$_SESSION['login'];
	include('config.php');
	$sql="select * from phong where so_phong = $_GET[id] and user='$user'";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>	
<form action="modules/quanlyphong/xuly.php?id=<?php echo $dong['so_phong'] ?>" method="post" enctype="multipart/form-data">
<table width="90%" border="1" style="font-size:16px">
  <tr>
    <td colspan="2" style="background-color:#f2f2f2"><div align="center"><em>Sửa phòng</em></div></td>
  </tr>
  <tr>
    <td width="100"><div align="center">Số phòng</div></td>
    <td><input type="text" name="so_phong" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $dong['so_phong'] ?>"></td>
  </tr>
  <tr>
    <td width="100"><div align="center">Địa chỉ</div></td>
    <td><input type="text" name="dia_chi" value="<?php echo $dong['dia_chi'] ?>"></td>
  </tr>
  <tr>
    <td width="100"><div align="center">Diện tích</div></td>
    <td><input type="text" name="dien_tich" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $dong['dien_tich'] ?>"></td>
  </tr>
  <tr>
    <td width="100"><div align="center">Giá phòng</div></td>
    <td><input type="text" name="gia_phong" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $dong['gia_phong'] ?>"></td>
  </tr>
  <tr>
	<td class="btn" colspan="2">
    	<button type="submit" name="sua" id="sua">Sửa</button>
    </td>    	
  </tr>
</table>
</form>

<div class="plus">
	<a href="http://localhost:8080/techweb/room/index.php?quanly=quanlyphong&ac=them">
		<i class="fas fa-plus-circle button_color"></i>
    </a>
</div>
<style>
#sua{
	font-size:20px;
	background-color:#f2f2f2;
	cursor:pointer;
	width:363px;
	height:50px;
	margin:0 auto;
	border:none;
}
div.plus {
  	margin: 0 auto;
  	text-align:center;
	font-size:35px;
}
.btn {
	padding-left:0;
}
</style>