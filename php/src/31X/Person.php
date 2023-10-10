<?php
abstract class Person
{
    const LIMITE_EDAD = 66;
    protected static $limite_edad = self::LIMITE_EDAD;

    protected $nombre;
    protected $apellidos;
    protected $edad;

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
        return $this->getEdad() > self::LIMITE_EDAD;
    }

    static function modificaLimite($nuevoLimite)
    {
        self::$limite_edad = $nuevoLimite;
    }

    abstract public static function toHtml(Person $person): string;

    function __toString(): string
    {
        return "<p>" . $this->getNombre() . " " . $this->getApellidos() . "</p>";
    }
}