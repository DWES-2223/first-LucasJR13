<?php
use Objetos\Empleado;
require_once ("Empleado.php");

$listadoTlf = [789458612, 154789623, 754896213, 1458967452];
$emp = new Empleado(4000, $listadoTlf, "Lucas", "Juan", 19);

echo Empleado::toHtml($emp);