<?php

namespace Objetos;

class Empleado extends \Persona8 {

    private int $sou;
    private array $listadoTlf;

    public function __construct(int $sou, array $listadoTlf){
        $this->sou = $sou;
        $this->listadoTlf = $listadoTlf;
    }

    public function getListadoTlf(): array{
        return $this->listadoTlf;
    }

    public function anyadirTelefono(int $telefono) : void {
        array_push($this->listadoTlf, $telefono);
    }

    public function listarTelefonos(): string {
        $stringTlf = "";
        if (count($this->listadoTlf) !== 0){
            foreach ($this->listadoTlf as $tlf){
                $stringTlf .= $tlf . ",";
            }
        } else {
            return "Listado telefonos vacío";
        }
        return $stringTlf;
    }

    public function listarTelefonosHTML(): string {
        $tlfHTML = "<li>";

        foreach ($this->listadoTlf as $tlf){
            $tlfHTML .= "<ul>" . $tlf . "</ul>";
        }
        $tlfHTML .= "</li>";
        return $tlfHTML;
    }

    public function vaciarTelefonos(): void {
        $this->listadoTlf = [];
    }

    public function debePagarImpuestos(): bool {
        return $this->sou > 3333;
    }

    public static function toHtml(Empleado $emp): string {
        return "<p>" . $emp->getNombreCompleto() . "</p><br>" . $emp->listarTelefonosHTML();
    }

}