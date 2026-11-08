<?php

class Cliente
{
    public string $nombre;
    private int $numero;

    private int $maxAlquilerConcurrente; //ccontador de alquileres

    private array $soportesAlquilados;


    public function __construct(
        string $nombre,
        int $numero,
        int $maxAlquilerConcurrente =3
    ){

    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getnumSoportesAlquilados(){
        return $this->soportesAlquilados;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


}

?>