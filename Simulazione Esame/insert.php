<?php
    $id = $_POST['tessera'];
    $pass = $_POST['password'];

    $db = new mysqli('localhost', 'Operatore', '', 'Vaccinazioni');

    $sql = "SELECT * FROM Operatore WHERE tessera_san = '$id' AND password = '$pass'";

    $result = $db->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        foreach ($result as $row) {
            $_SESSION['id'] = $row['codOp'];
        }
        
        header("Location: insert_vacc.html");
    }

    $db -> close();
?>