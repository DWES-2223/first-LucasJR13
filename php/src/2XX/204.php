<!DOCTYPE html>
<html lang="es">

<?php 
    $anyActual = date("Y");
    $edat = $_GET["edat"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($edat)) {
        echo $edat - 10 . "<br>";
        echo $edat + 10 . "<br>";
        echo $anyActual + (67 - $edat);
    } else {
        echo("Posa la teu edat actual a la variable edat pel QueryString");
    }
    ?>

</body>
</html>