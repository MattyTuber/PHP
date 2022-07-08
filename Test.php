<?php
    $string = "Test";
    echo "Test --> ";
    echo strpos($string, "e");

    $time = strtotime("now");
    echo "<br>Timestamp --> " . $time;

    $data = date("d/m/y", $time);
    echo "<br>Data --> " . $data;

    $data = date("d/m/y");
    echo "<br>Data --> " . $data;

    $result = "Milan-Inter 1-0";

    for ($i=0; $i < strlen($result); $i++) { 
        if(is_numeric($result[$i])){
            $pos = $i;
            break;
        }
    }

    echo "<br>" .  substr($result, $pos);
?>