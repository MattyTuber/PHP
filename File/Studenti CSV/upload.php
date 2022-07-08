<?php
    $db = new mysqli('localhost', 'root', '', 'Studenti');
    
    $server = "Server\\";
    $server .= $_FILES['file']['name'];
    move_uploaded_file($_FILES["file"]["tmp_name"],$server);

    $file = fopen($server, "r");

    while(!feof($file)) {
        $data = fgetcsv($file, 1000, ";");
        $sql = "INSERT INTO Studente (Nome, Cognome, Nascita, Matricola, Media)";
        $sql .= "VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', ".$data[3].", ".$data[4].");";
        $db->query($sql) or die("Errore nella query: " . $db->error);
    }

    fclose($file);
    $db->close();
?>