<?php
    $numbers = array(10,3,1,100,230,56,33,53,91,24);

    foreach($numbers as $element)
        echo $element . " ";

    echo "<br><br>";

    for ($i=9; $i >= 0; $i--) { 
        echo $numbers[$i] . " ";
    }

    echo "<br><br>Max --> " . max($numbers);

    echo "<br><br>Min --> " . min($numbers);

    echo "<br><br>Avarage --> " . array_sum($numbers) / count($numbers);

    $even = array();
    $odd = array();

    foreach ($numbers as $value) {
        if($value % 2 == 0)
            array_push($even, $value);
        else
            array_push($odd, $value);
    }

    echo "<br><br>Even --> ";

    foreach($even as $element)
        echo $element . " ";

    echo "<br><br>Odd --> ";

    foreach($odd as $element)
        echo $element . " ";
?>