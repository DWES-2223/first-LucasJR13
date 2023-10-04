<!DOCTYPE html>
<html lang="es">

<?php
$cantidad = $_GET["cantidad"]??null;
?>

<head>
    <meta charset="UTF-8">
    <title>Supermercado</title>
</head>
<body>

<?php
if (isset($cantidad)) {
    ?>
    <h1>SUPERMERCADO</h1>
    <form method="post" action="244b.php">
    <?php for ($i = 1; $i <= $cantidad; $i++){ ?>
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre[]"><br><br>
            <label for="precio">Precio:</label>
            <input id="precio" name="precio[]"><br><br>
    <?php } ?>
        <input type="submit" value="Submit">
    </form>
    <?php
} else {
    echo "Introduce un valor de cantidad";
}
?>

</body>
</html>
