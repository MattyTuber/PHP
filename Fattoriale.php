<?php
    function factorial($n) {
        if ($n == 0) return 1;

        return ($n * factorial($n - 1));
    }

    for($i = 0; $i < 10; $i++)
        echo "Fattoriale $i --> " . factorial($i) . "<br>";
?>