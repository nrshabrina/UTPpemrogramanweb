<?php
include "koneksi.php";
$nama = $_POST ['nama'];
$kelas = $_POST ['kelas'];
$input = mysqli_query ($koneksi,
		"INSERT INTO klasifikasi (nama, kelas)
		VALUES ('$nama', '$kelas')"
		);
		
if ($input){
	header("location:klasifikasi.php");
}
else {
header("location:klasifikasi.php");
}
?>
