<!DOCTYPE html>
<html lang="es">

<?php
include_once ("functions.php");
$nombre = $_POST["nombre"]??null;
$precio = $_POST["precio"]??null;
$totalPrecio = 0;
?>

<head>
    <meta charset="UTF-8">
    <title>Lista Supermercado</title>
</head>
<body>

<?php
if (isset($nombre) && isset($precio)) {
    ?>
    <h1>LISTA SUPERMERCADO</h1>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Euros</td>
                <td>Pesetas</td>
            </tr>
        </thead>
        <?php for ($i = 0; $i < count($precio); $i++){
                $totalPrecio += $precio[$i];
                ?>
            <tr>
                <td><?= $nombre[$i] ?></td>
                <td><?= $precio[$i] ?> €</td>
                <td><?= euros2peseta((int)$precio[$i]) ?> Pt</td>
            </tr>
        <?php } ?>
        <tr>
            <td>Total: </td>
            <td><?= $totalPrecio ?> €</td>
            <td><?= euros2peseta((int)$totalPrecio) ?> Pt</td>
        </tr>
    </table>
    <?php
} else {
    echo "Introduce un valor";
}
?>

</body>
</html>
