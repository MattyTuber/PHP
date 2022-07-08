<?php
$cf = $_POST['CF'];
$pass = $_POST['psw'];

if (empty($cf) || empty($pass))
    echo "<a href='login.html'>Reinserire Credenziali</a>";
else {
    session_start();
    $_SESSION['user'] = $cf;
    $db = new mysqli('localhost', 'root' , '', 'Clienti');
    
    $query = "SELECT CF, Password FROM Utente";

    $res = $db->query($query);

    foreach($res as $line){
        if($cf == $line['CF'] && $pass == $line['Password'])
            die("Login Successfully");
    }

    echo "<a href='login.html'>Credenziali Errate</a>";
}
?>