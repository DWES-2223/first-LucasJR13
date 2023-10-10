<?php
class Enterprise implements JSerializable {
    protected $workers = array();

    public function __construct(protected $nom,protected $direccio) {}

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function getDireccio()
    {
        return $this->direccio;
    }

    public function setDireccio($direccio): void
    {
        $this->direccio = $direccio;
    }

    public function addWorker(Worker $t){
        array_push($this->workers, $t);
    }

    public function listWorkersHtml() : string {
        $stringWorkers = "<div>";
        foreach ($this->workers as $worker){
            $stringWorkers .= Worker::toHtml($worker);
        }
        $stringWorkers .= "</div";
        return $stringWorkers;
    }

    public function getCosteNominas(): float{
        $totalNominas = 0;
        foreach ($this->workers as $worker){
            $totalNominas += $worker->calcularSueldo();
        }
        return $totalNominas;
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            if (is_array($valor)){
                foreach ($valor as $worker){
                    $mapa[$clave][] = $worker->toJSON();
                }
            } else {
                $mapa[$clave] = $valor;
            }
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}