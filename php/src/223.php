<!DOCTYPE html>
<html lang="es">

<?php 
    $num = $_GET["nombre"]??null;
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    if (isset($num)) {
        ?>    
        <table>
            <thead>
                <tr>
                    <td>a</td>
                    <td>*</td>
                    <td>b</td>
                    <td>=</td>
                    <td>a*b</td>
                </tr>
            </thead>
            <?php
            for ($i = 0; $i <= 10; $i++){
                ?>    
                <tr>
                    <td><?= $num ?></td>
                    <td>*</td>
                    <td><?= $i ?></td>
                    <td>=</td>
                    <td><?= $i * $num ?></td>
                </tr>
            <?php 
                }
            ?>   
            
            <tr>    
        </table>    
    <?php
    } else {
        echo "Posa el nombre pel QueryString";
    }
    ?>

</body>
</html>