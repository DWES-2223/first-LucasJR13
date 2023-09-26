<!DOCTYPE html>
<html lang="es">

<?php 
    $base = $_GET["base"]??null;
    $exponente = $_GET["exponent"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($base) && isset($exponente)) {
        
        $potencia = 1;
        for ($i = 1; $i <= $exponente; $i++) {
            $potencia *= $base;
        }
        echo($base ."^". $exponente ." = ". $potencia);

    } else {
        echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
    }
    ?>

</body>
</html>