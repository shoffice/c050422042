<?php
$mahasiswa = array(
    "Ayu" => 85, 
    "Binna" => 95, 
    "Anna" => 50, 
    "Karin" => 67, 
    "Caca" => 53
);

$mahasiswa2 = array(
    "oliv" => 99,
    "ale" => 71,
);
    echo "<strong>Array sebelum digabung:<br/></strong>";
    foreach ($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
echo "<br>";
    // Menggabungkan dua array
    $mahasiswa = array_merge($mahasiswa, $mahasiswa2);
    echo "<strong>Array setelah digabungkan:<br/></strong>";
    foreach($mahasiswa as $nama => $nilai) {
        echo "$nama: $nilai<br>";
    }
echo "<br>";
    $cari = 99;
    // Mencari nilai tertentu di dalam array dan mengembalikan kunci (key) dari nilai yang dicari cocok dalam array.
    $kunci = array_search($cari, $mahasiswa);
    if ($kunci !== false) {
        echo "Nilai $cari ditemukan dalam array mahasiswa dengan kunci: $kunci<br>";
    } else {
        echo "Nilai $cari tidak ditemukan dalam array mahasiswa.<br>";
    }
echo"<br>";
    $cari = 99;
    // Mencari nilai tertentu di dalam array, tetapi tidak mengembalikan kunci (key) dari elemen yang cocok
    if (in_array($cari, $mahasiswa)) {
        echo "Nilai $cari ditemukan dalam array mahasiswa.<br>";
    } else {
        echo "Nilai $cari tidak ditemukan dalam array mahasiswa.<br>";
    }
echo"<br>";    
    // Mengambil semua kunci dari array, yaitu berupa nama mahasiswa
    $kunciMahasiswa = array_keys($mahasiswa);
    echo "<strong>Nama-nama mahasiswa:<br></strong>";
    foreach ($kunciMahasiswa as $kunci) {
        echo "$kunci<br>";
    }
echo "<br>";
    // Mengambil semua nilai dari array mahasiswa
    $nilaiMahasiswa = array_values($mahasiswa);
    echo "<strong>Nilai-nilai mahasiswa:<br></strong>";
    foreach ($nilaiMahasiswa as $nilai) {
        echo "$nilai<br>";
    }
?>