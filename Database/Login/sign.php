<?php
$cf = $_POST['CF'];
$pass = $_POST['psw'];
$name = $_POST['nome'];
$sur = $_POST['cognome'];
$date = $_POST['data'];

$db = new mysqli('localhost', 'root', '', 'Clienti');

$sql = "INSERT INTO Utente(CF, Password, Nome, Cognome, DataNascita)";
$sql .= "VALUES ('".$cf."', '".$pass."', '".$name."', '".$sur."', '".$date."')";

$db->query($sql) or die("Creazione non Eseguita");

echo "Creazione Avvenuta";
echo "<a href='login.html'>Vai al Login</a>";
?>