<?php
    $face = rand(1, 6);
    $guess = $_GET['num'];

    if($guess == $face){
        echo "You guessed correctly!";
    }
    else {
        echo "You guessed incorrectly!";
    }
?>