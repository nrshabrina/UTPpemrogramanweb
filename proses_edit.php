
<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$edit_klasifikasi = mysqli_query($koneksi, "UPDATE klasifikasi SET
nama='$nama', kelas='$kelas'
WHERE id='$id'");
if($edit_klasifikasi){
	header("location:klasifikasi.php");
}
?>
