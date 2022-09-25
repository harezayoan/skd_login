<?php session_start();
	session_destroy();
	setcookie('user','Tunggu 20 Detik!',time()+20);
	header("location:index.php");
?>
