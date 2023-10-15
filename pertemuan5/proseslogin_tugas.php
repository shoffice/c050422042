<?php
session_start();

$users = [
    'Ali' => 'password1',
    'Bona' => 'password2',
    'Charlie' => 'password3',
    'Dede' => 'password4',
    'Emon' => 'password5',
];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: login.php');
        exit();
    } else {
        if (!array_key_exists($username, $users)) {
            $error_message = "Username tidak terdaftar";
        } else {
            $error_message = "Password yang dimasukkan salah";
        }
    }
}

include('header.php');
?>

<html>
<head>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h3>Silakan Login</h3>
    <form method="post">
        <label>Username</label><br>
        <input type="text" name="username" required><br>
        <br>
        <label>Password</label><br>
        <input type="password" name="password" required><br>
        <br>
        <input type="submit" value="Login">
    </form>
    <?php
        if (isset($error_message)) {
            echo "<p>$error_message</p>";
        }
        include('footer.php')
    ?>
</body>
</html>