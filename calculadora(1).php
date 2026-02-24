<?php

function calcular($operacio, $a, $b) {
    switch ($operacio) {
        case "s":
            return $a + $b;

        case "r":
            return $a - $b;

        case "m":
            return $a * $b;

        case "d":
            if ($b == 0) {
                return "Error: divisió per zero";
            }
            return $a / $b;

        default:
            return "Error: operació desconeguda";
    }
}

$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

echo calcular($operacio, $primerNumero, $segonNumero);

?>
