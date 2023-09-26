<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
    $contador = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo ($i==10)?"=":"+";
        $contador += $i;
    }
    echo $contador;
?>

</body>
</html>