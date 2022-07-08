<?php
    
    $materie = array("Italiano" => 9, "Storia" => 9, "Inglese" => 10, "Matematica" => 10, "Informatica" => 10, "Sistemi" => 10, "TP" => 9, "Motoria" => 9);

    $ins = 0;

    foreach ($materie as $key => $value) {
        if($value < 6){
            echo $key . " --> " . $value . " Insufficente";
            $ins++;
        }
        else{
            print_r($value);
            echo $key . " --> " . $value . " Sufficente";
        }

        echo "<br>";
    }
    
    if ($ins <= 1)
        echo "<br><br>Promosso";
    elseif ($ins <= 3)
        echo "<br><br>Giudizio Sospeso";
    else
        echo "<br><br>Bocciato";
?>