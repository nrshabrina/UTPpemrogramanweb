<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<html>
<title>Form Pendaftaran</title>
<body>
    <br><br><br>
<link rel="stylesheet" type="text/css" href="style/login.css"></link>
<div>
<center><img src="img/bungalogin.png"
        height= "70" width="70"> </center><br><br>
        
        <form action="prosesdaftar.php" method="post">

            <input class="input" type="text" name="username" placeholder="Username"/>
            <input class="input" type="password" name="password" placeholder="Password"/>
            <button type="submit" class="submit">Daftar</button>
            <button type="reset" class="submit">Batal</button><br><br>
            <center> <img src="img/hiasan.png" style: "width=70px; height=30px">
        <p><colspan="2" align="center" style = "color: gray; font-family: 'MS Gothic';">Sudah Punya Akun? <a href="Login.php"><b>Login</b></a><p>

    </div>
    </body>
</html>