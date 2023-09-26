<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<ul>
<?php
$numAleatorios = [];
for ($i = 0; $i < 50; $i++) {
    $numAleatorios[] = rand(0, 99); ?>
    <li> <?= $numAleatorios[$i] ?>  </li>
<?php } ?>
</ul>

</body>
</html>