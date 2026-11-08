<?php

class Soporte {

    private const IVA = 21;

    public function __construct(
        public string $titulo,
        protected int $numero,
        private float $precio
    ) {}

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getPrecioConIVA(): float {
        return $this->precio * (1 + self::IVA / 100);
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function muestraResumen(): void {
        echo "<br><strong>" . $this->titulo . "</strong>";
        echo "<br>" . $this->precio . " € (IVA no incluido)";
    }

}