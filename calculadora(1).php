<?php

function calcular($operacio, $a, $b) {
    if ($operacio == "s") {
        return $a + $b;
    } else if ($operacio == "r") {
        return $a - $b;
    } else if ($operacio == "m") {
        return $a * $b;
    } else if ($operacio == "d") {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Error";
        }
    }
}

$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

echo calcular($operacio, $primerNumero, $segonNumero);

?>
