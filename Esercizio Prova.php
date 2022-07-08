<?php
    //Definisco la costante STR
    define("STR", "1");
    $num = 1;

    if($num == STR)
        print("Equals --> " . $num . " " . STR);
    else
        print("Different --> " . $num . " " . STR);

    if($num === STR)
        echo "<br>" . "Equals --> " . $num . " " . STR;
    else
        echo "<br>" . "Different --> " . $num . " " . STR;

?>