<!DOCTYPE html>
<html lang="en">

<?php
$personas = [["nom" => "lucas", "altura" => 180, "email" => "lucas@gmail.com"],
    ["nom" => "jaume", "altura" => 182, "email" => "jaume@gmail.com"],
    ["nom" => "arantxa", "altura" => 172, "email" => "arantxa@gmail.com"],
    ["nom" => "maria", "altura" => 170, "email" => "maria@gmail.com"],
    ["nom" => "aivan", "altura" => 150, "email" => "aivan@gmail.com"]];
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
        <td>Email:</td>
    </tr>
    </thead>
    <?php foreach ($personas as $persona){ ?>
        <tr>
            <td> <?= $persona["nom"] ?> </td>
            <td> <?= $persona["altura"] ?> </td>
            <td> <?= $persona["email"] ?> </td>
        </tr>

    <?php } ?>
</table>

</body>
</html>
