<!DOCTYPE html>
<html lang="es">

<?php 
    $hora = $_GET["hora"]??null;
    $min = $_GET["minut"]??null;
    $sec = $_GET["segon"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($hora) && isset($min) && isset($sec)) {
        if ($sec == 59){
            $sec = 0;
            if ($min == 59){
                $min = 0;
                if ($hora == 23){
                    $hora = 0;
                } else {
                    $hora++;
                }
            } else {
                $min++; 
            }
        } else {
            $sec++;
        }
        echo($hora .":". $min .":". $sec);
    } else {
        echo("Posa les variables hora, minut i segon pel QueryString");
    }
    ?>

</body>
</html>