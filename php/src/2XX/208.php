<!DOCTYPE html>
<html lang="es">

<?php 
    $edad = $_GET["edat"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($edad)) {
        if ($edad < 3){
            echo("ets un bebé");
        } elseif ($edad <= 12){
            echo("ets un xiquet");
        } elseif ($edad <= 17) {
            echo("ets un adolescent");
        } elseif ($edad <= 66) {
            echo("ets un adult");
        } else {
            echo("ets un jubilat");
        }
    } else {
        echo("Posa la teu edat actual a la variable edat pel QueryString");
    }
    ?>

</body>
</html>