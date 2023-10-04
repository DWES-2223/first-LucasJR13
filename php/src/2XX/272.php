<?php
include_once("functions.php");
$records = include_once("atletes.php");

echo "Record més antic: " . vell($records) . "<br>";
echo "Club amb més títols: " . laureado(array_column_ext($records, "club", -1)) . "<br>";
echo "Persona amb més records: " . laureado(array_column_ext($records, "atleta", -1)) . "<br>";
echo "Ciutat més propicia: " . laureado(array_column_ext($records, "lloc", -1)) . "<br>";

$index = jove(array_column_ext($records, "data", -1), array_column_ext($records, "natalici", -1));
$nombreAtleta = "";
if (array_key_exists($index, $records)) {
    $recordEncontrado = &$records[$index];
    $nombreAtleta = $recordEncontrado["atleta"];
}
echo "Mes jove en aconsegir el record en la categoria " . $index . " y se llama: " . $nombreAtleta . " <br><br>";

require_once("270a.php");
