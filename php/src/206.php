<!DOCTYPE html>
<html lang="es">

<?php 
    $num = $_GET["numero"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($num)) {
        if ($num > 0){
            echo("El número ". $num ." és positiu");
        } elseif ($num < 0){
            echo("El número ". $num ." és negatiu");
        } else {
            echo("El número ". $num ." és zero");
        }
    } else {
        echo("Posa el numero a comprobar a la variable numero del QueryString");
    }
    ?>

</body>
</html>