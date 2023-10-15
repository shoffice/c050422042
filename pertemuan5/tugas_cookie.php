<?php
    function BilGanjil($i){
        return $i % 2 == 1;
    }
    
    $jumlah = 0;
    for ($bil = 10; $bil <= 123456; $bil++) {
        if (BilGanjil($bil)) {
            $jumlah++;
        }
    }
    echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah $jumlah";
?>