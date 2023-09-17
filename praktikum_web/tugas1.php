<?php
/*
    Jika ada seorang nasabah bank yang menabung di bank X dengan saldo awal Rp. 2000.000,-. Bank X memberikan kebijakan bunga 3% perbulan dari saldo awal tabungan. Hitunglah jumlah saldo akhir nasabah tersebut setelah 11 bulan.
*/
    $saldoAwal = 2000000;
    $bunga = 0.03;
    $bulan = 11;
    // melengkapi script rumus menghitung saldo akhir
    $saldoAkhir = $saldoAwal + ($saldoAwal*$bunga*$bulan);
    echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",-";
?>