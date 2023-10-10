<?php
class Persona8
{
    const LIMITE_EDAD = 66;
    protected static $limite_edad = self::LIMITE_EDAD;

    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int    $edad = 25
    )
    {
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
        return $this->getEdad() > self::LIMITE_EDAD;
    }

    static function modificaLimite($nuevoLimite)
    {
        self::$limite_edad = $nuevoLimite;
    }

    public static function toHtml(Persona8 $person): string
    {
        return "<p>" . $person->getNombre() . " " . $person->getApellidos() . "</p>";
    }

    function __toString(): string
    {
        return "<p>" . $this->getNombre() . " " . $this->getApellidos() . "</p>";
    }
}