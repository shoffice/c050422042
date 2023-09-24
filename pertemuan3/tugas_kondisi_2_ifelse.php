<?php
$nilai = 60;

    echo "<strong>Nilai: $nilai <br/></strong>";
    if($nilai > 89) {
        echo "Keterangan: Baik Sekali (A)";
    }elseif ($nilai > 75) {
        echo "Keterangan: Baik (B)";
    }elseif ($nilai > 59){
        echo "Keterangan: Cukup (C)";
    }elseif ($nilai > 49){
        echo "Keterangan: Hampir Cukup (D)";
    }else{
        echo "Keterangan: Kurang (E)";
    }
?>