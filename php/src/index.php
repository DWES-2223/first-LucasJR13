<?php
include_once ("functions.php");

echo esParell(4)?"SI":"NO";
echo "<br>";

$array = arrayAleatori(5, 0, 1);
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] .", ";
}
echo "<br>";

echo countParells($array);
echo "<br>";

echo major(2, 3, 4);
echo "<br>";

echo concatenar("hola", "que", "tal");
echo "<br>";

echo digits(15);
echo "<br>";

echo digitsN(12, 0);
echo "<br>";

