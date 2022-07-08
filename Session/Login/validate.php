<?php
    if(isset($_POST['username'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        session_start();

        $_SESSION['utente'] = $user;
        $_SESSION['password'] = $pass;

        echo "<a href='session.php'>Leggi dalla Sessione</a>";
    }
    else{
        echo "<a href='index.html'>Ripeti Login</a>";
    }
?>