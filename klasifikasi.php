<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM klasifikasi");
//var_dump ($query);

?>
<html>
<head>
	<title>Klasifikasi</title>
	<link rel="stylesheet" type="text/css" href="style/gaya_klasifikasi.css">
	<link rel="stylesheet" type="text/css" href="style/dropdown.css">
	<link rel="stylesheet" type="text/css" href="style/list.css">
	<link rel="stylesheet" type="text/css" href="style/form.css">

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
			</ul>
		</div>
`
		<div class="badan">
			<center>
            <div class="isi">
			<h1>Form Request Artikel Plantism</h1>
			<br>
            
            <form action= "proses_input.php" method="post">
            <input class="input" type="text" name="nama" placeholder="Nama Tanaman"/><br>
            <input class="input" type="text" name="kelas" placeholder="Genus"/></br>
            <input type= "submit" value= "Request Artikel">  

					<br><br>
					<h2>List Request Artikel Plantism</h2>
					<br>
					<center>
					<table id="List">
                        <tr>
		             	   	<th> Id </th>
                       		<th> Nama </th>
                       		<th> Genus </th>
		               		<th> Edit </th>
	                		<th> Delete </th>
                    	</tr>
	
	<?php
	$no=1;
	
	while($data = mysqli_fetch_array ($query)){
		?>
	<tr>
		<td> <?php echo $no++ ?> </td>
        <td> <?php echo $data ['nama'] ?> </td>
        <td> <?php echo $data ['kelas'] ?> </td>
		<td> <a href="edit_klasifikasi.php?id=<?php echo $data['id'];?>"> Edit</a> </td>
		<td> <a href="delete_klasifikasi.php?id=<?php echo $data['id'];?>"> Delete </a> </td>
	</tr>
	<?php
    }
	?>
	</table>

                         
            </div>
        </center>
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