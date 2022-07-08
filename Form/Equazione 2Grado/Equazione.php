<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $delta = ($b * $b) - (4 * $a * $c);

    if($delta < 0){
        echo "Impossibile";
    }
    else if($delta == 0){
        $x = -1*$b / (2 * $a);
        
        if(!is_int($x))
            echo "x = " . $b . " / " . 2*$a;
        else
            echo "x = $x";
    }
    else {
        $x1 = (-1*$b - sqrt($delta)) / (2 * $a);
        if(filter_var($x1, FILTER_VALIDATE_INT) === false)
            echo "x1 = (" . -$b . "-" . "√" . ($delta) . ") / " . 2*$a;
        else
            echo "x1 = $x1";
        
        $x2 = (-1*$b + sqrt($delta)) / (2 * $a);
        if(filter_var($x2, FILTER_VALIDATE_INT) === false)
            echo "<br>x2 = (" . -$b . "+" . "√" . ($delta) . ") / " . 2*$a;
        else
            echo "<br>x2 = $x2";
    }
?>