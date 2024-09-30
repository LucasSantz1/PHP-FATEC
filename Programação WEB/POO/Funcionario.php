<?php

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}

class Servente extends Funcionario {
    public function getSalario() {
        // Adicional de 5% de insalubridade
        return parent::getSalario() * 1.05;
    }
}

class Motorista extends Funcionario {
    private $numCarteira;

    public function __construct($nome, $salario, $numCarteira) {
        parent::__construct($nome, $salario);
        $this->numCarteira = $numCarteira;
    }

    public function getNumCarteira() {
        return $this->numCarteira;
    }

    public function setNumCarteira($numCarteira) {
        $this->numCarteira = $numCarteira;
    }
}

class MestreDeObras extends Servente {
    private $numFuncionarios;

    public function __construct($nome, $salario, $numFuncionarios) {
        parent::__construct($nome, $salario);
        $this->numFuncionarios = $numFuncionarios;
    }

    public function getSalario() {
        // Adicional de 10% para cada grupo de 10 funcionários
        $gruposDeDez = floor($this->numFuncionarios / 10);
        return parent::getSalario() * (1 + (0.10 * $gruposDeDez));
    }

    public function getNumFuncionarios() {
        return $this->numFuncionarios;
    }

    public function setNumFuncionarios($numFuncionarios) {
        $this->numFuncionarios = $numFuncionarios;
    }
}

?>
