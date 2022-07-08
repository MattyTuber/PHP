<?php
    $somma = 0;

    for($i = 0; $i <= 10; $i+=2)
        $somma += $i;

    echo "Somma Pari --> " . $somma;

    $somma = 0;

    for($i = 1; $i <= 10; $i+=2)
        $somma += $i;

    echo "<br>" . "Somma Dispari --> " . $somma;
?>