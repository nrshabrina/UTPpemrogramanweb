<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "utp_pemweb";
$koneksi = mysqli_connect ($host, $username, $password) or die ("koneksi gagal");
mysqli_select_db ($koneksi, $db)
or die ("database tidak tersedia");
?>
