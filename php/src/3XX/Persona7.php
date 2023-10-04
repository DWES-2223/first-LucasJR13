<?php

namespace Objetos;
class Persona7
{
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    function getNombreCompleto(): string
    {
        return $this->getNombre() . " " . $this->getApellidos();
    }

    function estaJubilado(): bool
    {
        return $this->getEdad() > 65;
    }
}