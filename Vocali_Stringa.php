<?php
    $str = "Lorem ipsum dolor sit amet";
    $a = 0;
    $e = 0;
    $i_wov = 0;
    $o = 0;
    $u = 0;

    echo $str . "<br><br>";

    for ($i=0; $i<strlen($str); $i++) {
        if($str[$i] == 'a' or $str[$i] == 'A')
            $a++;
        elseif($str[$i] == 'e' or $str[$i] == 'E')
            $e++;
        elseif($str[$i] == 'i' or $str[$i] == 'I')
            $i_wov++;
        elseif($str[$i] == 'o' or $str[$i] == 'O')
            $o++;
        elseif($str[$i] == 'u' or $str[$i] == 'U')
            $u++;
    }

    if($a != 0)
        echo "A --> " . $a;
    
    if($e != 0)
        echo "<br>E --> " . $e;

    if($i_wov != 0)
        echo "<br>I --> " . $i_wov;

    if($o != 0)
        echo "<br>O --> " . $o;

    if($u != 0)
        echo "<br>U --> " . $u;
    
    /*-------------------------------------------------------------------------------*/
    
    $str = strtolower($str);
    
    $a = substr_count($str, "a");

    $e = substr_count($str, "e");

    $i = substr_count($str, "i");

    $o = substr_count($str, "o");

    $u = substr_count($str, "u");

    echo "<br><br>----------------------------------------------<br><br>";

    if($a != 0)
        echo "A --> " . $a;
    
    if($e != 0)
        echo "<br>E --> " . $e;

    if($i_wov != 0)
        echo "<br>I --> " . $i_wov;

    if($o != 0)
        echo "<br>O --> " . $o;

    if($u != 0)
        echo "<br>U --> " . $u;
?>