<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM klasifikasi");
//var_dump ($query);

?>
<html>
<head>
	<title>Kontak</title>
	<link rel="stylesheet" type="text/css" href="style/gaya_klasifikasi.css">
	<link rel="stylesheet" type="text/css" href="style/dropdown.css">
	<link rel="stylesheet" type="text/css" href="style/list.css">
	<link rel="stylesheet" type="text/css" href="style/form.css">

</head>
<body>
	<div class="wrap">
		<div class="header">			
           <img src="img/plantism.png" style="padding: 10px;width:480px">
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
            <h2>Kontak</h2>
            <br>
            <center>
                <table id="List">
                    <tr>
                        <td> No </td>
                       	<td> Nama </td>
                       	<td> NPM </td>
		               	<td> No HP </td>
	                	<td> E-mail </td>
                    </tr>
                    <tr>
                        <td> 1 </td>
                       	<td> Intan Dinasti </td>
                       	<td> 1617051033 </td>
		               	<td> (+62) 85 267-982-558  </td>
	                	<td> intandinasti@gmail.com </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                       	<td> Mela Rahmadani </td>
                       	<td> 1617051049 </td>
		               	<td> (+62) 85 167-382-458  </td>
	                	<td> rahmadanimela@gmail.com </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                       	<td> Nur Shabrina </td>
                       	<td> 1617051099 </td>
		               	<td> (+62) 85 267-982-321  </td>
	                	<td> nr.shabrina@gmail.com </td>
                    </tr>
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