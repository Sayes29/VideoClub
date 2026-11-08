<?php

class Cliente
{
    public string $nombre;
    private int $numero;

    private int $maxAlquilerConcurrente;

    private array $soportesAlquilados;
    private int $numSoportesAlquilados;


    public function __construct(
        string $nombre,
        int $numero,
        int $maxAlquilerConcurrente = 3
    ) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
        $this->soportesAlquilados = [];
        $this->numSoportesAlquilados = 0;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getnumSoportesAlquilados()
    {
        return count($this->soportesAlquilados);
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function muestraResumen()
    {
        echo $this->nombre . $this->numSoportesAlquilados; //añadir alguna forma de contar los que lleva
    }

    public function tieneAlquilado(Soporte $s): bool
    {
        foreach ($this->soportesAlquilados as $soporte) {
            if ($soporte === $s) {
                return true;
            }
        }
        return false;
    }

    public function alquilar(Soporte $s): bool
    {
        if ($this->tieneAlquilado($s)) {
            echo "<br>El cliente ya tiene alquilado el soporte " . $s->titulo;
            return false;
        }

        if ($this->getnumSoportesAlquilados() >= $this->maxAlquilerConcurrente) {
            echo "<br>Este cliente tiene " . $this->getnumSoportesAlquilados() . " elementos alquilados. No puede alquilar más en este videoclub hasta que no devuelva algo.";
            return false;
        }

        $this->soportesAlquilados[] = $s;
        $this->numSoportesAlquilados++;
        echo "<br><strong>Alquilado soporte a:</strong> " . $this->nombre . "<br>";

        return true;
    }

    public function devolver(int $numSoporte): bool
    {
        $pos = 0;
        foreach ($this->soportesAlquilados as $soporte) {
            if ($soporte->getNumero() === $numSoporte) {
                array_splice($this->soportesAlquilados, $pos, 1);
                $this->numSoportesAlquilados--;
                echo "<br>El cliente " . $this->nombre . " ha devuelto el soporte.";
                return true;
            }
            $pos++;
        }

        echo "<br>No se ha podido encontrar el soporte en los alquileres de este cliente.";
        return false;
    }

   public function listarAlquileres(): void
{
    echo "<br>Este cliente tiene " . $this->getnumSoportesAlquilados() . " soportes alquilados.";
    
    foreach ($this->soportesAlquilados as $sopo) {
        $sopo->muestraResumen();
    }
}}

?>