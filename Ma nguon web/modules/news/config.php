<?php 
	$tenmaychu='mysql';
	$tentaikhoan='root';
	$pass='mypass123@##^!';
	$csdl='techweb';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl);
	if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
	mysqli_select_db($conn,$csdl);
?>