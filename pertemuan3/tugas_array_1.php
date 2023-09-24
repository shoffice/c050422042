<?php
$mahasiswa = array(
    "Ayu" => 85, 
    "Binna" => 95, 
    "Anna" => 50, 
    "Karin" => 67, 
    "Caca" => 53
);

    echo "<strong>Array sebelum diurutkan:<br/></strong>";
    foreach ($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
echo "<br/>";
    asort($mahasiswa);
    echo "<strong>Array setelah diurutkan berdasarkan nilai (ascending):<br/></strong>";
    foreach($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
echo "<br/>";
    arsort($mahasiswa);
    echo "<strong>Array setelah diurutkan berdasarkan nilai (descending):<br/></strong>";
    foreach($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
echo "<br/>";
    ksort($mahasiswa);
    echo "<strong>Array setelah diurutkan berdasarkan kunci (ascending):<br/></strong>";
    foreach($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
echo "<br/>";
    krsort($mahasiswa);
    echo "<strong>Array setelah diurutkan berdasarkan kunci (descending):<br/></strong>";
    foreach($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
?>