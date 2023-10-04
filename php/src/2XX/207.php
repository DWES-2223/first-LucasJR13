<!DOCTYPE html>
<html lang="es">

<?php 
    $a = $_GET["numero1"]??null;
    $b = $_GET["numero2"]??null;
    $c = $_GET["numero3"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($a) && isset($b) && isset($c)) {

        $mayor = max($a, $b, $c);
        echo("El nombre més gran entre ". $a .", ". $b ." i ". $c ." és el ". $mayor);
            
    } else {
        echo("Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString");
    }
    ?>

</body>
</html>