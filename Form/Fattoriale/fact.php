<?php
    echo "Norlmal --> " ;
    
    $num = $_GET['num'];

    if($num == 0){
        echo "1";
    }
    else {
        $fact = 1;
        for($i = 1; $i <= $num; $i++){
            $fact = $fact * $i;
        }
        echo $fact;
    }

    echo "<br><br>With _REQUEST --> ";

    $num = $_REQUEST['num'];

    if($num == 0){
        echo "1";
    }
    else {
        $fact = 1;
        for($i = 1; $i <= $num; $i++){
            $fact = $fact * $i;
        }
        echo $fact;
    }
?>