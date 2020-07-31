<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    // Atributos
    private $especialidade;
    private $salario;
    
    // Métodos Públicos
    public function receberAum($aumento) {
        $this->setSalario += $aumento;
    }
    
    // Métodos Especiais
    public function getEspecialidade() {
        return $especilidade;
    }
    public function setEspecialidade($e) {
        $this->especialidade = $e;
    }
    
    public function getSalario() {
        return $salario;
    }
    public function setSalaraio($s) {
        $this->salario = $s;
    }
}
