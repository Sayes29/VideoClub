<?php
include_once "soporte.php";
class Juego extends Soporte
{
    public string $Consola;
    private int $minNumJugadores;
    private int $maxNumJugadores;

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        string $Consola,
        int $minNumJugadores,
        int $maxNumJugagdores

    ) {
        parent::__construct($titulo, $numero, $precio);
        $this->Consola = $Consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugagdores;

    }

    public function muestraJugadoresPosibles(): void
    {
        $result = "";
        if ($this->maxNumJugadores <= 1) {
            echo "Para un solo jugador";
        } elseif ($this->minNumJugadores === $this->maxNumJugadores) {
            echo "Para: " . $this->minNumJugadores;
        } else {
            echo "Entre: " . $this->minNumJugadores . " y " . $this->maxNumJugadores;
        }

    }
    public 

    public function muestraResumen():void{
    echo "consola: " . $this->Consola . "<br>";
    $this->muestraJugadoresPosibles();

    }



}


?>