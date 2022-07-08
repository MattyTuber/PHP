<?php
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    
    setcookie("nome", $nome, time() + 3600);
    setcookie("cognome", $cognome, time() + 3600);

    echo "Valori --> " . $nome . " " . $cognome;
?>