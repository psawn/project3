<form action="modules/quanlyphong/xuly.php" method="post" enctype="multipart/form-data">
<table width="90%" border="1" style="font-size:16px">
  <tr>
    <td colspan="2" style="background-color:#f2f2f2"><div align="center"><em>Quản lý phòng</em></div></td>
  </tr>
  <tr>
    <td width="120"><div align="center">Số phòng</div></td>
    <td><input type="text" name="so_phong" required></td>
  </tr>
  <tr>
    <td width="120"><div align="center">Địa chỉ</div></td>
    <td><input type="text" name="dia_chi" ></td>
  </tr>
  <tr>
    <td width="120"><div align="center">Diện tích</div></td>
    <td><input type="text" name="dien_tich" ></td>
  </tr>
  <tr>
    <td width="120"><div align="center">Giá phòng</div></td>
    <td><input type="text" name="gia_phong" ></td>
  </tr>
  <tr>
	<td class="btn" colspan="2"><div align="center">
    <button type="submit" name="them" id="them" >Thêm</button>
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
</style>