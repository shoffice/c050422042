<?php
    session_start();
    if ( (isset($_GET['aksi'])) and ($_GET['aksi']=="logout")){
        session_destroy();
        header("refresh;3;proses_radio.php");
    }
    
    if(isset($_SESSION['login'])){
        $nama = $_SESSION['username'];
        echo"<center>";
        echo"<h1>Ini Halaman Pertama</h1>";
        echo"<p>Anda Login Sebagai ".$nama."</p>";
        echo"<p>Berikut ini menu navigasi anda</p>";
        echo"<p><a href='menu1.php'>Menu 1&nbsp</a><a href='menu2.php'>Menu 2&nbsp</a><a href='menu3.php'>Menu3&nbsp</a></p>";
        ?>
        <a href="?aksi=logout">Logout</a> 
    </body>
        </center>
<?php
    }else{
        header("location: proses_login.php");
    }
?>