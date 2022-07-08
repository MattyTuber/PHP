<?php
$db = new mysqli('localhost', 'Operatore', '', 'Vaccinazioni');

if (is_null($_POST['mail']))
    $mail = NULL;
else
    $mail = $_POST['mail'];

$sql = "INSERT INTO Paziente (id, nome, cognome, data_nascita, address, city, mail, phone, password)";
$sql .= "VALUES ('$_POST[id]', '$_POST[nome]', '$_POST[cognome]', '$_POST[date]', '$_POST[address]', '$_POST[city]', '$mail', '$_POST[phone]', '$_POST[password]')";

$db->query($sql) or die("Query Fallita --> " . $db->error);

$db->close();

echo "Registrazione avvenuta con successo";
echo "<br>";
echo "<a href='index.html'>Torna alla Home</a>";
?>