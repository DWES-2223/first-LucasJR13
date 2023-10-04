<!DOCTYPE html>
<html lang="es">

<?php
    $nom = "Lucas";
    $apellido1 = "Juan";
    $apellido2 = "Riquelme";
    $email = "lucasjuanriquelme@gmail.com";
    $anoNacimiento = "2004";
    $telefono = "744480860"
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <table>
    <tr>
        <td>Nom</td>
        <td><?=$nom?></td>
    </tr>    
    <tr>
        <td>Cognoms</td>
        <td><?=$apellido1.' '.$apellido2?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$email?></td>
    </tr> 
    <tr>
        <td>Natalici</td>
        <td><?=$anoNacimiento?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?=$telefono?></td>
    </tr>
    </table>

</body>
</html>