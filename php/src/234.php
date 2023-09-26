<!DOCTYPE html>
<html lang="en">

<?php
$personas = ["lucas" => 180, "jaume" => 182, "aivan" => 150, "maria" => 167, "arantxa" => 170];
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

<table>
    <thead>
        <tr>
            <td>Nombre:</td>
            <td>Altura:</td>
        </tr>
    </thead>
    <?php foreach ($personas as $persona => $altura){ ?>
    <tr>
        <td> <?= $persona ?> </td>
        <td> <?= $altura ?> cm </td>
    </tr>

    <?php } ?>
</table>

</body>
</html>