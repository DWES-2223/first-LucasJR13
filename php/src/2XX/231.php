<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$numAleatorios = [];
for ($i = 0; $i < 33; $i++) {
    $numAleatorios[] = rand(0, 100);
}

echo max($numAleatorios) ."<br>";
echo min($numAleatorios) ."<br>";
echo array_sum($numAleatorios)/count($numAleatorios);

?>

</body>
</html>
