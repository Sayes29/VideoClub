<?php

include_once "soporte.php";

class Dvd extends Soporte
{
    public string $idiomas;
    private string $formatoPantalla;

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        
        string $idiomas, //el nuevo
        string $formatoPantalla

    ) {
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
    }

   
    public function muestraResumen(): void
    {
        parent::muestraResumen();
       echo "<br><strong>Idiomas:</strong> " . $this->idiomas;
        echo "<br><strong>Formato de pantalla:</strong> " . $this->formatoPantalla;
    }

}

?>