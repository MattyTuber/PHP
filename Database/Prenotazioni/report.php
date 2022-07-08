<?php
    $db = new mysqli('localhost', 'root', '', 'Eventi');

    if($db->connect_errno > 0){
        die('Non riesco a connettermi al database [' . $db->connect_error . ']');
    }

    $query = "SELECT E.nome, SUM(P.persone) AS Totale
                FROM Evento E, Prenotazioni P
                WHERE E.nome = P.nomeEvento
                GROUP BY E.nome";

    $result = $db->query($query);

    if($result->num_rows > 0){
        echo "<table border='1'>";
        echo "<tr><th>Evento</th><th>Totale persone</th></tr>";
        foreach($result as $row){
            echo "<tr><td>".$row['nome']."</td><td>".$row['Totale']."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "Nessun risultato";
    }
    echo "<br><br>";
    $query = "SELECT E.nome, SUM(P.persone) AS Totale
                FROM Evento E, Prenotazioni P
                WHERE E.nome = P.nomeEvento
                GROUP BY E.nome
                ORDER BY Totale DESC
                LIMIT 1";

    $result = $db->query($query);

    if($result->num_rows > 0){
        echo "<table border='1'>";
        echo "<tr><th>Evento</th><th>Totale persone</th></tr>";
        foreach($result as $row){
            echo "<tr><td>".$row['nome']."</td><td>".$row['Totale']."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "Nessun risultato";
    }

    $db->close();

    echo "<a href='index.html'>Prenota nuovo evento</a>";
?>