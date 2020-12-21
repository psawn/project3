<?php 
	include('config.php');
	$sql="select * from tintuc where id_tintuc=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlytintuc/xuly.php?id=<?php echo $dong['id_tintuc'] ?>" method="post" enctype="multipart/form-data">
<table width="90%" border="1" style="font-size:16px">
  <tr>
    <td colspan="2" style="background-color:#f2f2f2"><div align="center"><em>Sửa tin tức</em></div></td>
  </tr>
  <tr>
    <td width="85px">Title</td>
    <td><textarea name="title" cols="30" rows="3"><?php echo $dong['title'] ?></textarea></td>
  </tr>
  <tr>
    <td width="85px">Hình ảnh</td>
    <td><img src="modules/quanlytintuc/uploads/<?php echo $dong["hinh_anh"] ?>" width="110px"  /><input type="file" name="hinh_anh"></td>
  </tr>
  <tr>
    <td width="85px">Mô tả</td>
    <td><textarea name="mo_ta" cols="30" rows="12"><?php echo $dong['mo_ta'] ?></textarea></td>
  </tr>
  <tr>
    <td width="85px">Giá</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"></td>
  </tr>
  <tr>
    <td width="85px">Diện tích</td>
    <td><input type="text" name="dien_tich" value="<?php echo $dong['dien_tich'] ?>"></td>
  </tr>
  <tr>
    <td width="85px">Địa chỉ</td>
    <td><input type="text" name="dia_chi" value="<?php echo $dong['dia_chi'] ?>"></td>
  </tr>
  <tr>
    <td class="btn" colspan="2">
      <div align="center">
        <button type="submit" name="sua" id="sua" value="Sửa tin">Sửa tin</button>
      </div>
    </td>
  </tr>
</table>
</form>
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
	padding-left:0;
}
textarea {
	border:none;
	outline: none;
	width:100%;
}
</style>