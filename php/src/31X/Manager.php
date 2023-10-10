<?php

class Manager extends Worker implements JSerializable {

    public function __construct(protected $nombre, protected $apellidos, protected $edat=25,protected $salario){}

    function calcularSueldo():float{
        return $this->salario + ($this->salario*$this->edad)/100;
    }



}