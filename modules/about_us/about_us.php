<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>answer_assignment11_ver2</title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
</head>
<body>
    <div class="about_us">
        <ul class="nav">
            <li><a onclick="tabs(this,0);removeProfile()" class="item active">Introduction</a></li>
            <li><a onclick="tabs(this,1);dropProfile()" class="item">Profile</a></li>
            <li><a onclick="tabs(this,2);removeProfile()" class="item">Contact</a></li>
        </ul>
        <div class="tab-content">
            <div class="cinema" id="cinema">
                <div id="introduction" class="tab active">
                    <img class="intro-img" src="../../imgs/1.jpg">
                    <div class="intro">Create your business by just a click</div>
                    <div class="intro_2">Một Website giúp bạn quản lý, thanh toán online hay tìm kiếm các ngôi nhà, căn hộ hay phòng trọ. 
                    <ul>
                    	<li><i class="fas fa-long-arrow-alt-right arrow_color"></i> Dễ dàng</li>
                        <li><i class="fas fa-long-arrow-alt-right arrow_color"></i> Đơn giản</li>
                        <li><i class="fas fa-long-arrow-alt-right arrow_color"></i> Thuận tiện</li>
                    </ul>
                    </div>
                    
                </div>
                <div id="profile" class="tab">
                	<div class="profile">
                    	<img src="../../imgs/2.jpg">
                		<h3 id="drop" class="profile1">
                    		Duis vel turpis hendrerit, malesuada nulla viverra, mollis odio.
                    	</h3>
                        <h3 id="slide" class="profile2">
                    		Fusce rhoncus purus nec felis porta lacinia.
                    	</h3>
                	</div>
                </div>
                <div id="contact" class="tab">
                	<h4>Liên hệ để quảng cáo</h4>
                    <ul>	
                    	<li><i class="fas fa-map-marker-alt icon-contact"></i> Hà Nội, Việt Nam</li>
                    	<li><i class="fas fa-phone-square icon-contact"></i> 0972055909</li>
                        <li><i class="fas fa-envelope-square icon-contact"></i> psawn0972055909@yahoo.com.vn</li>                       
                    </ul>
                    <img src="../../techweb/imgs/8775771_orig.png">
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function tabs(e,number) {
        var li = document.getElementsByClassName("item");
		var i=0;
        for (i of li){
            i.classList.remove("active");
        }
        e.classList.add("active");
        document.getElementById("cinema").style.left = -number*1200+"px";
    }
</script>
</body>
</html>
<style>
.about_us{
    width: 100%;
	margin-top:30px;
}
.nav{
    float: left;
    width: 100%;
    border-bottom: 1px solid #06C;
}
.nav li{
    float: left;
    list-style: none;
}
.nav li a{
	cursor:pointer;
    float: left;
    padding: 15px 25px;
    font-size: 16px;
    color: #333333;
    text-decoration: none;
    margin-bottom: -1px;
    border: 1px solid #fff;
    border-bottom-color: #06C;
}
.nav li a.active,.nav li a:hover{
    border: 1px solid #06C;
    border-bottom-color: #ffffff;
    background-color: #fafafa;
    border-radius: 5px 5px 0 0;
}
.tab-content{
    float: left;
    width: 100%;
    position: relative;
    overflow: hidden;
    height: 450px;
}
.tab-content .tab{
    float: left;
    width: 100%;
    padding: 20px;
    height: 200px;
    width: 1200px;
    /*display: none;*/
}
.tab-content .tab.active{
    /*display: block;*/
}
.tab-content .cinema{
    height: 200px;
    width: 4800px;
    position: absolute;
    left: 0;
    top: 0;
    transition: all 500ms;
}
.tab img {
	opacity:0.8;
	position:relative;
}
.tab .intro {
	font-weight:600;
	font-size:30px;
	font-family: 'Chilanka', cursive;
	position:absolute;
	left:180px;
	top:50px;
}
.tab .intro_2 {
	float:right;
	width:200px;
	margin-right:100px;
	font-size:20px;
}
.tab .intro_2 ul {
	margin-top:20px;
	font-weight:600;
}
.tab .intro_2 ul li {
	line-height:1.5;
	list-style:none;
	position:relative;
}
.tab .intro_2 ul li i {
	transition:0.4s;
	position:absolute;
	top:5px;
	left:-25px;
}
.tab .intro_2 ul li:hover i {
	margin-left:5px;
}
.profile {
	position:relative;
}
.profile img {
	width:95%;
}
.profile1 {
	position:absolute;
	top:100px;
	left:220px;
}
.profile2 {
	position:absolute;
	top:170px;
	left:310px;
}
.drop {
	animation: magic 2s;
}
.slide {
	animation: magic2 2s
}
@keyframes magic {
	from {
		opacity:0;
		top:50px;
	}to {
		opacity:1
		top:100px;
	}
}
@keyframes magic2 {
	from {
		opacity:0;
		left:230px;
	}to {
		opacity:1
		left:310px;
	}
}
.arrow_color {
	color:#06C;
}
#contact h4 {
	font-size:22px;
}
#contact ul {
	font-size:16px;
}
#contact ul li {
	list-style:none;
	line-height:1.5;
}
#contact ul li .icon-contact {
	color:#06C;
	font-size:20px;
	margin-right:20px;
}
#contact img{
	float:right;
	margin-right:100px;
}
</style>
<script type="text/javascript">
	function dropProfile() {
		document.getElementById("drop").classList.add("drop");
		document.getElementById("slide").classList.add("slide");
	}
	function removeProfile() {
		document.getElementById("drop").classList.remove("drop");
		document.getElementById("slide").classList.remove("slide");
	}
</script>