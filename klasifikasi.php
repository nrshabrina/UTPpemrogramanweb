<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM klasifikasi");
//var_dump ($query);

?>
<html>
<head>
	<title>Klasifikasi</title>
	<link rel="stylesheet" type="text/css" href="style/gaya_klasifikasi.css">

</head>
<body>

	<div class="wrap">
		<div class="header">			
           <img src="img/plantism.png" style="padding: 10px;width:480px">
		</div>

		<div class="menu">
			<ul>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="klasifikasi.php">Klasifikasi</a></li>	
                <li><a href="home.php">Home</a></li>				
			</ul>
		</div>

		<div class="badan">
        <center>
            <div class="isi">
            
            <form action= "proses_input.php" method="post">
            <input class="input" type="text" name="nama" placeholder="nama tanaman"/>
            <input class="input" type="text" name="kelas" placeholder="kelas tanaman"/>
            <input type= "submit" value= "kirim">  

                    <h1> Klasifikasi Tanaman Monokotil dan Dikotil</h1>
                    <table border ="1" align=center>
	                    <tr>
		                <th> id </th>
                        <th> nama </th>
                        <th> kelas </th>
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
		</div>
	</div>
</body>
</html>