<?php
include "koneksi.php";
$id = $_GET ['id'];
$query = mysqli_query($koneksi, "SELECT * FROM klasifikasi WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

?>

<html>
<body>
	<form action= "proses_edit.php" method="post">
	<input value="<?= $data['id']; ?>" type="hidden" name="id">
	<input value="<?= $data['nama']; ?>" type="text" name="nama"> <br>
	<input value="<?= $data['kelas']; ?>" type="text" name="kelas">
	<input type= "submit" value= "kirim">


	</form>
</body>
</html>

      
