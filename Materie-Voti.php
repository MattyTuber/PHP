<?php
    
    enum Materie: int{
        case Italiano = 0;
        case Storia = 1;
        case Inglese = 2;
        case Matematica = 3;
        case Informatica = 4;
        case Sistemi = 5;
        case TP = 6;
        case Motoria = 7;
    }

    $ins = 0;
    
    for ($i=0; $i < 8; $i++) { 
        $rand = rand()&9+1;

        $mat = Materie::From($i);

        if($rand < 6){
            var_dump($mat);
            echo $rand . " Insufficente";
            $ins++;
        }
        else{
            var_dump($mat);
            echo $rand . " Sufficente";
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