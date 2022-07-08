<?php
    $db = new mysqli('localhost', 'Operatore', '', 'Vaccinazioni');

    $server = "Server\\";
    $server .= $_FILES['file']['name'];
    move_uploaded_file($_FILES["file"]["tmp_name"],$server);

    $file = fopen($server, "r");

    while(!feof($file)) {
        $data = fgetcsv($file, 1000, ";");
        $sql = "INSERT INTO Dose (codFiala, lotto, data, time, idPaziente, codOp, braccio, codSede, ragSoc) VALUES";
        $sql .= "(" . $data[0] . ", " . $data[1] . ", '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', " . $data[5] . ", '" . $data[6] . "', " . $data[7] . ", '" . $data[8] . "')";
        $db->query($sql) or die("Errore nella query: " . $db->error);
    }

    fclose($file);
    $db->close();
?>