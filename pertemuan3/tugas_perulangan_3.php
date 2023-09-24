<?php
$bilangan = 0;
    echo "<strong>Bilangan Bulat yang Merupakan Kelipatan 6 <br/></strong>";
    echo "<br/>";
    for ($a = 3; $a <= 127; $a++)
    {
        if ($a % 6 == 0){
            $bilangan = $bilangan + 1;
        }
    }
    echo "Jumlah bilangan yang merupakan kelipatan 6 adalah $bilangan";
?>