<?php
$lembar = 158;
$harga;

    if($lembar < 100) {
        $harga = $lembar * 150;
    } elseif ($lembar > 99 && $lembar < 201){
        $harga = $lembar*100;
    } elseif ($lembar > 200){
        $harga = $lembar*80;
    }

    $harga_format = 'Rp ' . number_format($harga, 0, ',', '.');
    echo "Biaya fotocopy untuk $lembar lembar adalah $harga_format";
?>