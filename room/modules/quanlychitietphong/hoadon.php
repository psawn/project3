<?php 
 	include('config.php');
	$id=$_GET['id'];
	$sql="select * from phong,chitietphong where phong.so_phong = chitietphong.so_phong and id_phong=$id";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<div id="date"></div>
<table width="400px" border="1" style="font-size:16px">
  <tr>
    <td colspan="2" style="background-color:#f2f2f2;font-size:20px"><div align="center"><em>Hóa đơn tiền nhà</em></div></td>
  </tr>
  <tr>
    <td width="200px">Số phòng</td>
    <td><?php echo $dong['so_phong'] ?></td>
  </tr>
  <tr>
    <td>Tháng</td>
    <td><?php echo $dong['thang'] ?></td>
  </tr>
  <tr>
    <td>Giá phòng</td>
    <td id="gia_phong"><?php echo $dong['gia_phong'] ?></td>
  </tr>
  <tr>
    <td>Số điện</td>
    <td id="so_dien"><?php echo $dong['dien'] ?></td>
  </tr>
  <tr>
    <td>Số nước</td>
    <td id="so_nuoc"><?php echo $dong['nuoc'] ?></td>
  </tr>
  <tr>
    <td>Dịch vụ</td>
    <td id="dich_vu"><?php echo $dong['dich_vu'] ?></td>
  </tr>
  <tr>
    <td>Tổng</td>
    <td id="tong"></td>
  </tr>
</table>
<button onClick="document.title = '<?php echo $dong['so_phong']."-".$dong['thang'] ?> ';window.print();" class="fas fa-file-download noprint button_print"></button>
<script>
	date = new Date();
	year = date.getFullYear();
	month = date.getMonth()+1;
	day = date.getDate();
	document.getElementById("date").innerHTML ="Ngày:"+ day + "/" + month + "/" + year;
	
	var gia_phong = parseFloat(document.getElementById("gia_phong").innerHTML);
	var so_dien = parseFloat(document.getElementById("so_dien").innerHTML);
	var so_nuoc = parseFloat(document.getElementById("so_nuoc").innerHTML);
	var dich_vu = parseFloat(document.getElementById("dich_vu").innerHTML);
	i = gia_phong + so_dien*3.5 +so_nuoc*10 + dich_vu;
	document.getElementById("tong").innerHTML = i;
</script>
<style>
@media print
{
	.noprint {
		display:none; 
	}
}
.button_print {
	padding:5px 25px;
	cursor:pointer;
	border:none;
	color:rgba(77, 140, 203, 0.9);
	font-size:35px;
	margin-left:calc((100% - 72.5px) / 2);
	top:10px;
	transition:0.4s;
	border-radius: 10px;
  	box-shadow: 0 10px #999;
	
}
.button_print:hover {
	color:#06C;
  	box-shadow: 0 5px #666;
  	transform: translateY(4px);
}
#date {
	float:left;
	width:100%;
	text-align:center;
	margin:10px 0;
	font-size:16px;
}
</style>