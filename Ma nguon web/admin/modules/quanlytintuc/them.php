<form action="modules/quanlytintuc/xuly.php" method="post" enctype="multipart/form-data">
<table width="90%" border="1" style="font-size:16px">
  <tr>
    <td colspan="2" style="background-color:#f2f2f2"><div align="center"><em>Đăng tin tức</em></div></td>
  </tr>
  <tr>
    <td width="85px">Title</td>
    <td><textarea name="title" cols="30" rows="3"></textarea></td>
  </tr>
  <tr>
    <td width="85px">Hình ảnh</td>
    <td><input type="file" name="hinh_anh"></td>
  </tr>
  <tr>
    <td width="85px">Mô tả</td>
    <td><textarea name="mo_ta" cols="30" rows="15"></textarea></td>
  </tr>
  <tr>
    <td width="85px">Giá</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td width="85px">Diện tích</td>
    <td><input type="text" name="dien_tich"></td>
  </tr>
  <tr>
    <td width="85px">Địa chỉ</td>
    <td><input type="text" name="dia_chi"></td>
  </tr>
  <tr>
    <td class="btn" colspan="2">
      <div align="center">
        <button type="submit" name="them" id="them" value="Đăng tin">Đăng tin</button>
      </div>
    </td>
  </tr>
</table>
</form>
<style>
#them{
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
textarea,input {
	border:none;
	outline: none;
	width:100%;
}
</style>