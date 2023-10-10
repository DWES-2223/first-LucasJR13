<?php
class Empleado extends Persona8
{

    private int $sou;
    private array $listadoTlf;

    public function __construct(int $sou, array $listadoTlf)
    {
        $this->sou = $sou;
        $this->listadoTlf = $listadoTlf;
    }

    public function getListadoTlf(): array
    {
        return $this->listadoTlf;
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
        return $this->sou > 3333;
    }

    public static function toHtml(Persona8 $person): string
    {
        $parragraf = Persona8::toHtml($person);
        if ($person instanceof Empleado) {
            $parragraf .= "<ul>";
            foreach ($person->getTelefonos() as $telefono) {
                $parragraf .= "<li>$telefono</li>";
            }
            $parragraf .= "</ul>";
        }
        return $parragraf;
    }

    public function __toString(): string
    {
        $parragraf = parent::__toString() . "<ul>";
        foreach ($this->getTelefonos() as $telefono) {
            $parragraf .= "<li>$telefono</li>";
        }
        return $parragraf . "</ul>";
    }

}