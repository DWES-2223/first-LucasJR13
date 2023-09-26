<!DOCTYPE html>
<html lang="en">
<?php
    extract($_POST);
?>
<style>
th, td {
  border:1px solid black;
}
</style>
<head>
    <meta charset="UTF-8">
    <title>Mostar taula amb files i columnes</title>
</head>
<body>
<?php
    if (is_numeric($files) && is_numeric($columnes)){ ?>
        <table>
            <?php for ($i=1; $i <= $columnes; $i++) { ?>
                <tr>
                <?php for ($j=1; $j <= $files; $j++) {
                    if ($i%2 === 0){
                        if ($j%2 === 0){ ?>
                            <td><?= chr(64+$i).$j ?></td>   
                        <?php } else { ?>
                            <td></td>
                        <?php }?>
                    <?php } else { 
                        if ($j%2 === 0){ ?>
                            <td></td>   
                        <?php } else { ?>
                            <td><?= chr(64+$i).$j ?></td>
                        <?php }?>
                    <?php } 
                } ?>
                </tr>
            <?php } ?>
        </table>    
    <?php } else {
        echo "Introdueix valors numèrics";
    }
    ?>
</body>
</html>