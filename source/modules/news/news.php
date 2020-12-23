<?php 
	include('config.php');
	$count_phong=2;
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
<link rel="stylesheet" type="text/css" href="../../libs/bootstrap-3.3.7/css/bootstrap.css" />
</head>
	<div class="row news_list">
    <?php
		while($dong=mysqli_fetch_array($run)){
	?>
		<div class="col-sm-11 news">
        	<div class="new_content">
            	<img src="../../techweb/admin/modules/quanlytintuc/uploads/<?php echo $dong['hinh_anh'] ?>" />
                <div class="intro">
                	<ul>
                    	<li>Mô tả: <?php echo $dong['mo_ta']; ?></li>
                        <li>Giá: <?php echo $dong['gia']; ?></li>
                        <li>Diện tích: <?php echo $dong['dien_tich']; ?></li>
                        <li>Địa chỉ: <?php echo $dong['dia_chi']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php 
		}
		?>
    </div>
    Trang:
<?php
	$sql_trang=mysqli_query($conn,"select * from tintuc");
	$count=mysqli_num_rows($sql_trang);
	$a=ceil($count/$count_phong);
	
	for($b=1;$b<=$a;$b++){
		echo '<a href="home.php?ac=read_news&trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '. '</a>';
	}
?>
<body>
</body>
</html>
<style>
.news_list {
	width:100%;
	float:left;
}
.news {
	
	margin-top:10px;
	float:left;
}
.new_content {
	height:210px;
	float:left;
	width:100%;
	padding-right:5px;
	border:2px solid #4fb68d;
	border-radius:5px;
}
.new_content img {
	padding:5px;
	float:left;
	max-width:35%;
	max-height:100%;
	margin-right:5px;
}
.new_content .intro {
	float:right;
	width:60%;
}
</style>