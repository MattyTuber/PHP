<?php
    if(!isset($_COOKIE['nome'])){
        echo "Cookie non memorizzati o scaduti";
    }else{
        echo "Valori --> " . $_COOKIE['nome'] . " " . $_COOKIE['cognome'];
    }
?>