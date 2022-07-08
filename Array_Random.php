<?php
    $numbers = array();

    for ($i=0; $i < 10; $i++) { 
        $numbers[$i] = rand(60, 100);
    }

    foreach($numbers as $element)
        echo $element . " ";
?>