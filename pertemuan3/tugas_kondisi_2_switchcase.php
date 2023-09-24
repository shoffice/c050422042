<?php
$nilai = 77;

    echo "<strong>Nilai: $nilai <br/></strong>";
    switch($nilai)
    {
        case (($nilai > 89) && ($nilai < 101));
        echo "Keterangan: Baik Sekali (A)";
        break;
        case (($nilai > 75) && ($nilai < 90));
        echo "Keterangan: Baik (B)";
        break;
        case (($nilai > 59) && ($nilai < 76));
        echo "Keterangan: Cukup (C)";
        break;
        case (($nilai > 49) && ($nilai < 60));
        echo "Keterangan: Hampir Cukup (D)";
        break;
        case (($nilai >= 0) && ($nilai < 50));
        echo "Keterangan: Kurang (E)";
        break;
    }
?>