<?php
session_start();

$db = new mysqli('localhost', 'Operatore', '', 'Vaccinazioni');

$sql = "INSERT INTO Dose (codFiala, lotto, data, time, idPaziente, codOp, braccio, codSede, ragSoc) VALUES";
$sql .= "(" . $_POST['fiala'] . ", " . $_POST['lotto'] . ", '" . $_POST['data'] . "', '" . $_POST['ora'] . "', '" . $_POST['tessera'] . "', " . $_SESSION['id'] . ", '" . $_POST['braccio'] . "', " . $_POST['codSede'] . ", '" . $_POST['ragSoc'] . "')";

$db -> query($sql) or die ("Query Fallita: " . $db -> error);

$db -> close();

echo "Dose inserita correttamente";
echo "<br>";
echo "<a href='index.html'>Torna alla pagina iniziale</a>";
?>