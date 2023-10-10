<?php
class Worker extends Person implements JSerializable {

    public function __construct($listadoTlf) {
        $this->listadoTlf = $listadoTlf;
    }

    public function anyadirTelefono(int $telefono): void
    {
        array_push($this->listadoTlf, $telefono);
    }

    public function listarTelefonos(): string
    {
        $stringTlf = "";
        if (count($this->listadoTlf) !== 0) {
            foreach ($this->listadoTlf as $tlf) {
                $stringTlf .= $tlf . ",";
            }
        } else {
            return "Listado telefonos vacío";
        }
        return $stringTlf;
    }

    public function vaciarTelefonos(): void
    {
        $this->listadoTlf = [];
    }

    public function debePagarImpuestos(): bool
    {
        return $this->calcularSueldo() > 3333;
    }

    abstract function calcularSueldo(): float;

    public static function toHtml(Person $person): string {
        return "<p>".$person->getNombreCompleto()."</p>";
    }

    public function toSerialize(): string{
        return serialize($this);
    }

    public function toJSON(): string {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor; }
        return json_encode($mapa);
    }
}