<?php
include "koneksi.php";
$nama = $_POST ['username'];
$pass = md5($_POST ['password']);
$input = mysqli_query ($koneksi,
		"INSERT INTO akun (username, password)
		VALUES ('$nama', '$pass')"
		);
if ($input){
	header("location:index.php");
}
else {
header("location:login.php");
}
?>
