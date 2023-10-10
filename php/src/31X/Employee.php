<?php

class Employee extends Worker implements JSerializable
{

    private int $sou;
    private int $horasTrabajadas;
    private int $precioHora;

    public function __construct(int $sou, int $horasTrabajadas, int $precioHora)
    {
        $this->sou = $sou;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioHora = $precioHora;
    }

    function calcularSueldo(): float{
        return $this->horasTrabajadas * $this->precioHora;
    }

}