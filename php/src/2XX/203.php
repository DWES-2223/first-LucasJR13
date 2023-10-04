<!DOCTYPE html>
<html lang="es">

<?php
    $nom = $_POST["nom"];
    $apellido1 = $_POST["cognom1"];
    $apellido2 = $_POST["cognom2"];
    $email = $_POST["email"];
    $anoNacimiento = $_POST["any"];;
    $telefono = $_POST["telefon"];
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