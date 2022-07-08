<?php
    $date = "La data è 14/01/2003";

    for ($i=0; $i < strlen($date); $i++) { 
        if(is_numeric($date[$i]))
            break;
    }

    $date = substr($date, $i);

    $format_date = explode('/', $date);

    $date_def = mktime(0,0,0,$format_date[1], $format_date[0], $format_date[2]);

    echo "Giorno --> " . date("l d",$date_def);
    echo "<br>Mese --> " . date("F",$date_def);
    echo "<br>Anno --> " . date("Y",$date_def);

    echo "<br><br>Completo --> " . date("l d F Y", $date_def);
?>