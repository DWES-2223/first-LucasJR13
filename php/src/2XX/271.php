<!DOCTYPE html>
<html lang="es">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$records = require_once("atletes.php");

$prova = $_POST["prova"] ?? null;
$marca = $_POST["marca"] ?? null;
$atleta = $_POST["atleta"] ?? null;
$natalici = $_POST["natalici"] ?? null;
$club = $_POST["club"] ?? null;
$data = $_POST["data"] ?? null;
$lloc = $_POST["lloc"] ?? null;
?>

<head>
    <meta charset="UTF-8">
    <title>Records</title>
</head>
<body>

<?php
if (isset($prova) && isset($marca) && isset($atleta) && isset($natalici) && isset($club) && isset($data) && isset($lloc)) {
    if (array_key_exists($prova, $records)){
    $recordEncontrado = &$records[$prova];
    $recordEncontrado["atleta"] = $atleta;
    $recordEncontrado["natalici"] = $natalici;
    $recordEncontrado["club"] = $club;
    $recordEncontrado["data"] = $data;
    $recordEncontrado["lloc"] = $lloc;

    require_once("270a.php");

    } else { ?>
        <p>La prova <?= $prova ?> no existeix en la llista de records oficials de la FEA</p>
    <?php }
} ?>
</body>
</html>
<?php } else {
    require_once("271.html");
}
