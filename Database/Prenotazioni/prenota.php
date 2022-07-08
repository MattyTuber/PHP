<?php
    $event = $_POST['evento'];
    $people = $_POST['persone'];

    $db = new mysqli('localhost', 'root', '', 'Eventi');

    if($db->connect_errno > 0){
        die('Non riesco a connettermi al database [' . $db->connect_error . ']');
    }

    $query = "INSERT INTO Prenotazioni (nomeEvento, persone)";
    $query .= " VALUES ('".$event."', ".$people.")";

    $db->query($query);

    $db->close();

    echo "<a href='report.php'>Visualizza Riepilogo</a>";
?>