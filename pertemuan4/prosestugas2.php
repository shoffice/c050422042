<?php
    $username = $_POST['username'];
    $pw = $_POST['pw'];

    $validusername = 'admin';
    $validpw = 'admin';

    if($username == $validusername && $pw == $validpw){
        header('Location: success.php');
        exit();
    }else if ($username == $validusername && $pw != $validpw){
        header('Location: error1.php');
        exit();
    }else{
        header('Location: error2.php');
        exit();
    }
?>