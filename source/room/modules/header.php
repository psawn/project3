<div class="container header noprint">	
    <ul class="menu">
       	<li><a href="index.php" class="text-animation">
           	<span>Home</span> 
            <div></div>
		</a></li>
        <li><a href="index.php?quanly=quanlyphong&ac=them" class="text-animation">
          	<span>Quản lý phòng</span>
            <div></div>
        </a></li>
        <li><a href="index.php?quanly=quanlytien">
        	<span>Quản lý tiền</span>
            <div></div>
        </a></li>
        <li><a href="logout.php" class="text-animation" onclick="return confirm('Bạn có đăng xuất?')">
           	<span>Đăng xuất</span>
            <div></div>
       	</a></li>
	</ul>
    <div style="margin-top:5px;float:right;font-size:18px;">
    	<?php echo "Xin chào:"." ".$_SESSION['login'] ?>
    </div>
</div>