<?php 

session_start();
include 'config.php';

	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$sql = mysqli_query($conf, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	$cek = mysqli_num_rows($sql);

	if($cek > 0){
		$data = mysqli_fetch_assoc($sql);
		if($data['role']=="User"){
			$_SESSION['nama'] =  $data['nama'];
			$_SESSION['role'] = "User";
			header("location:layout/index.php");
		}else if($data['role']=="Admin"){
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['role'] = "Admin";
			header("location:layout/index.php");
		}
	}else{
		$_SESSION['user']+=1;
		echo "
		<script>	
				alert('Email atau Password salah!.  Kamu memasukkan ".$_SESSION['user']." kali'); 
				window.location='index.php';
		</script>";
		if($_SESSION['user']>2)
			{
				header('location:time.php');
			}
	}
}
?>