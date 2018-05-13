<?php
// FILE DELETE
include "koneksi.php";
$id = $_GET ['id'];
$delete = mysqli_query($koneksi,
	"DELETE FROM klasifikasi WHERE id='$id'");
	if ($delete){
		header("location:klasifikasi.php");
	}
?>
