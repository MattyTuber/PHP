<?php
    session_start();

    echo "Utente --> " . $_SESSION['utente'] . "<br>Password --> " . $_SESSION['password'];
?>