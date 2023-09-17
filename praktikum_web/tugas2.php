<?php
    //Membuat program untuk menghitung bangun ruang kerucut
    $phi = 3.14;
    $r = 5;
    $s = 13;
    $lalas = $phi * $r * $r;
    $luasp = ($phi * $r * $r) + ($phi * $r * $s);
    echo "<h3>Menghitung Luas Alas dan Luas Permukaan Bangun Ruang Kerucut</h3>";
    echo "<b>Diketahui: </b> <br>";
    echo "Phi: $phi <br>";
    echo "Jari-Jari: $r <br>";
    echo "Garis pelukis: $s <br>";
    echo "<br>";
    echo "<b>Hasil:</b> <br>";
    echo "Luas alas : ".$lalas." cm² <br>";
    echo "Luas permukaan : ".$luasp." cm² <br>";
?>