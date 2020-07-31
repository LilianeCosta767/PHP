<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    // Atributos
    private $setor;
    private $trabalhando;
    
    // Métodos Públicos
    public function mudarTrabalho() {
        $this->trabalhando = !$this->trabalhando;
    }
    
    // Métodos Especias
    public function getSetor() {
        return $setor;
    }
    public function setSetor($s) {
        $this->setor = $s;
    }
    
    public function getTrabalhando() {
        return $trabalhando;
    }
    public function setTrabalhando($t) {
        $this->trabalhando = $t;
    }
}
