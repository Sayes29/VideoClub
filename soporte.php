<?php
class Soporte{

private static const IVA = 21;
public function __construct(
    public string $titulo,
    protected int $numero,
    private float $precio
){}

public function getPrecio():float{
   return $this->precio;
}

public function getprecioConIVA():float{
    return $this->precio * (1 + self::IVA / 100);

}

public function getNumero():int{
    return $this->numero;

}

public function muestraResumen():string{
    return "Titulo: $this->titulo, Numero: $this->numero, Precio: $this->precio, Precio con IVA: ".$this->getprecioConIVA();
}

}

?>