<?php

function esParell(int $a) : bool {
    return $a%2==0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $array = [];
    for ($i = 0; $i <= $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function countParells(array $array): int {
    $contador = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (esParell($array[$i])){
            $contador++;
        }
    }
    return $contador;
}

function major(): int {
    $array = func_get_args();
    $mayor = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($mayor < $array[$i]){
            $mayor = $array[$i];
        }
    }
    return $mayor;
}

function concatenar(...$paraules) : string {
    $array = "";
    foreach ($paraules as $paraula){
        $array = $array ." ". $paraula;
    }
    return $array;
}

function digits(int $num): int {
    return strlen($num);
}

function digitsN(int $num, int $post): int {
    return strval($num)[$post];
}
