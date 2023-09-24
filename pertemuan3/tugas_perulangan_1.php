<?php
    echo "<strong>Bilangan Bulat Kelipatan 10 <br/></strong>";
    echo "<br/>";
    for ($a = 5; $a <= 100; $a++)
    {
        if( $a % 10 == 0)
            echo "$a <br />";
    }
?>