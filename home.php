<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<html>
<head>
	<title>Plantism</title>
	<link rel="stylesheet" type="text/css" href="style/gaya_home.css">
	<link rel="stylesheet" type="text/css" href="style/dropdown.css">
	

</head>
<body>

	<div class="wrap">
		<div class="header">			
           <center><img src="img/plant.png" style="padding: 0px;width:1000px"></center>
		</div>

		<div class="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="klasifikasi.php">Klasifikasi</a></li>
				<li><a href="kontak.php">Contact</a></li>
                <li><a href="#" onClick="return confirm ('Hubungi bebekgoreng@gmail.com')">Help</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>

		<div class="badan">		

			<div class="sidebar">
				<br><br>
                <img src="img/teratai.jpg" style="padding: 5px;width:480px;height:350px;"><br>
                <h3 style="font-family: “Palatino Linotype”;font-size: 30px;width: 800px; margin: 15px;">Bunga Teratai</h3>
				<hr>
				<br><br>
                <img src="img/matahari.jpg" style="padding: 5px;width:480px;height:350px;"><br>
                <h3 style="font-family: “Palatino Linotype”;font-size: 30px;width: 800px; margin: 15px;">Bunga Matahari
    		</div>
            
			<div class="content">

				<center>
				<table style="width: 800px">
					<tr><br><br><br>
						<td colspan= 2 align= left><h1> Tanaman Obat Keluarga dan Manfaatnya</h1></td>
					</tr>
					<tr> 
						<td valign="top" align="left"> <p class:"justify"> Tanaman obat keluarga atau biasa disingkat Toga merupakan 
						tanaman yang bisa dibudidayakan di pekarangan rumah
						dan mempunyai manfaat sebagai obat-obatan herbal tradisional. 
						Penggunaan tanaman sebagai pengobatan herbal sudah dipraktekkan sejak
						jaman Mesir kuno sekitar 2500 tahun Sebelum Masehi. Indonesia memiliki
						30.000 jenis tanaman dari total 40.000 jenis tanaman yang ada di dunia,
						dan 940 jenis diantaranya merupakan tanaman yang bisa dimanfaatkan untuk
						obat-obatan tradisional dalam kehidupan sehari-hari.</p>
						<h3><a href="artikel_toga.php"> Read More... </a></h3>
						</td>

						<td>
							<img src="img/herb-garden.jpg" style="padding: 10px;width:350px;height:300px;"><br><br><br>
						</td>
					</tr>
				</table>

				<hr>

				<table style="width: 800px">
					<tr><br><br>
						<td colspan= 2 align= left><h1> Tanaman Saga-Klasifikasi Serta Khasiatnya</h1></td>
					</tr>
					<tr> 
						<td valign="top" align="left"> <p class:"justify"> Saga, saga telik, saga manis ( Abrus precatorius )
						merupakan tanaman perdu merambat, melilit, tinggi 2-5 m. Daun majemuk ganjil dan duduk berseling-seling.
						Anak daun 8-17 pasang, bentuk bulat telur, panjang 0,6-2,5 cm, lebar 3-5 mm, jika diremas rasa seperti
						kayu manis. Bunga majemuk, panjang bunga 1-1,5 cm, warna tajuk ungu muda sampai kemerahan. 
						Variasi ukuran daun tergantung tempat tumbuh. Buah polong, panjang 2-5 cm, berisi 3-6 biji. 
						Biji berbentuk bulat lonjong, garis tengah 0,5 cm,keras, biji segar berwarna merah mengkilat.</p>
						<h3><a href="artikel_saga.php"> Read More... </a></h3>						
						</td>

						<td> 
							<img src="img/saga.jpg" style="padding: 10px;width:350px;height:300px;"><br>
						</td>
					</tr>
				</table>
			</center>

            </div>
		</div>
		
		<div class="clear"></div>
		<div class="footer">
			<br>
			<p>Intan-Mela-Shabrina</p>
			<br>
		</div>
		</div>
	</div>
</body>
</html>