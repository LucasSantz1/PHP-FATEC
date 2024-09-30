<?php

abstract class Telefone {
    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempo);
}

class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoPorMinuto;
    }
}

abstract class Celular extends Telefone {
    protected $custoMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }
}

class PrePago extends Celular {
    public function calculaCusto($tempo) {
        // Acréscimo de 40% no custo do minuto base
        return $tempo * $this->custoMinutoBase * 1.40;
    }
}

class PosPago extends Celular {
    public function calculaCusto($tempo) {
        // Desconto de 10% no custo do minuto base
        return $tempo * $this->custoMinutoBase * 0.90;
    }
}

?>
