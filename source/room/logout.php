<?php 
	session_start();
	session_destroy();
	header('location:http://localhost:9000/home.php?ac=login');
?>