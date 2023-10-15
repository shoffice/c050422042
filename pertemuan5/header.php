<html>
<head>
    <title>Autentikasi Pengguna</title>
</head>
<body>
    <?php
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo '<h2>Selamat Datang</h2>';
        echo "Username: $username";
    }else {
        echo '<h2>Autentikasi Pengguna</h2>';
    }
    ?>
    <hr>
</body>
</html>