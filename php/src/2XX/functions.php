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

function peseta2euros(int $cantidad) : float {
    return $cantidad / 166.386;
}

function euros2peseta(int $cantidad) : float {
    return $cantidad * 166.386;
}

function fecha_inglesa(string $stringFecha):string {
    $fechaSeparada = explode(".", $stringFecha);
    return $fechaSeparada[2] . "/" .  $fechaSeparada[1] . "/" . $fechaSeparada[0];
}

function any(string $fecha) {
    $fechaSeparada = explode(".", $fecha);
    return intval($fechaSeparada[2]);
}

function compara_fechas(string $fecha1, string $fecha2){
    if ($fecha2 == ""){
        return $fecha1;
    }
    return fecha_inglesa($fecha2) > fecha_inglesa($fecha1);
}

function vell(array $records){
    $category = "";
    $minorDate = "";
    foreach ($records as $record => $element) {
        if(compara_fechas($element["data"],$minorDate)){
            $minorDate = $element["data"];
            $category = $record;
        }
    }
    return $category;
}

function laureado(array $array){
    $valores = array_count_values($array);
    return array_search(max($valores), $valores);
}

function jove(array $data, array $natalici){
    $atletaJoven = null;
    $menorDif = PHP_INT_MAX;

    $clavesData = array_keys($data);
    $clavesNatalici = array_keys($natalici);

    for ($i = 0; $i < count($data); $i++) {
        $claveData = $clavesData[$i];
        $claveNatalici = $clavesNatalici[$i];

        $anyNacimiento = intval($natalici[$claveNatalici]);

        $edadAtleta = any($data[$claveData]) - $anyNacimiento;

        if ($edadAtleta < $menorDif){
            $atletaJoven = $claveNatalici;
            $menorDif = $edadAtleta;
        }
    }
    return $atletaJoven;
}

function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}