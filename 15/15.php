<?php
$a = $_POST['a'];
$b = $_POST['b'];
$operation = $_POST['operation'];

if(is_numeric($a) & is_numeric($b)) {
    if(($operation == "/" or $operation == "%")  & $b == 0){
        echo "На ноль делить нельзя";
        exit();
    }
    $result = $a;
    $result .= $operation;
    $result .= $b;
    echo $result . " = ";
    echo eval("return $result;");
}
else {
   echo "error of type";
}