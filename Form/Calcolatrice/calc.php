<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$op = $_GET['calculator'];

if($op == '+'){
    $result = $num1 + $num2;
}
else if($op == '-'){
    $result = $num1 - $num2;
}
else if($op == '*'){
    $result = $num1 * $num2;
}
else if($op == '/'){
    if($num2 != 0)
        $result = $num1 / $num2;
    else {
        echo "Impossibile dividere per 0";
        return;
    }
}

echo "$num1 $op $num2 = $result";
?>