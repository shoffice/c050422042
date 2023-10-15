<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: proseslogin_tugas.php');
    exit();
}

$username = $_SESSION['username'];
include('header.php');
?>
    
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>    
    <p>Link <a href="link1.php">1</a> | Link <a href="link2.php">2</a>| Link <a href="link3.php">3</a> | <a href="logout.php">Logout</a></p>
    <br>
    <p>Ini merupakan isi dari halaman Link2</p>
</body>
</html>

<?php include('footer.php');?>