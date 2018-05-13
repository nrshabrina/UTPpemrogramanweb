<?php
include"koneksi.php";
session_start();

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$query= mysqli_query($koneksi, "SELECT * FROM akun WHERE password='$password'");
	
	$rows= mysqli_num_rows($query);
	if($rows ==1){
		$_SESSION['username'] = $username;
		header("location:home.php");
	}
	else{
		echo "Username atau Password salah";
	}
	?>
