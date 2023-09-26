<!DOCTYPE html>
<html lang="es">

<?php 
    $cantidad = $_GET["quantitat"]??null;
    $billetes = array(500, 200, 100, 50, 20, 10, 5);
    $monedas = array(2, 1);
?>

<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
    if(isset($cantidad)){
            foreach($billetes as $billete){
              $numeroBilletes = intdiv($cantidad,$billete);
             if($numeroBilletes > 0){
                  $cantidad -= $numeroBilletes * $billete;
                  if($numeroBilletes == 1){
?>
                   <?= $numeroBilletes?> bitllet de <?= $billete?><br>
<?php
                }else{
?>
                    <?= $numeroBilletes?> bitllets de <?= $billete?><br>
<?php
                }
             }
            }
            foreach($monedas as $moneda){
                $numeroMonedas = intdiv($cantidad,$moneda);
                if($numeroMonedas > 0){
                    $cantidad -= $numeroBilletes * $billete;
                    if($numeroMonedas == 1){
?>
                        <?= $numeroMonedas?> moneda de <?= $moneda?><br>
<?php
                    }else{
?>
                        <?= $numeroMonedas?> monedes de <?= $moneda?><br>
<?php
                    }
                }
            }

    }else{
?>
        Posa la quantitat a la variable quantitat pel QueryString;
<?php
    }
?>
</body>
</html>

