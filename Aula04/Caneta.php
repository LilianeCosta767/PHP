<?php

class Caneta {
    // Atributos
    public $modelo;
    private $ponta;
    private $tampada;
    
    // Cnstrutor
    public function __construct($m, $c, $p) { // podemos substituir __construct pelo nome da classe
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    
    // Métodos Públicos
    public function tampar() {
        $this->tampada = true;
    }


    // Métodos Especiais
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}
