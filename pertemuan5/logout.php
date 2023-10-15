<?php
session_start();
session_destroy();
header('Location: proseslogin_tugas.php');
exit();
?>