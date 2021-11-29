<!--Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta-->

<?php

$arrayNumber = [];

while (count($arrayNumber) <= 15) {
    $number = rand(1, 100);

    if (!in_array($number, $arrayNumber)) {
        array_push($arrayNumber, $number);
    }
}

var_dump($arrayNumber)
?>