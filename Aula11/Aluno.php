<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    // Atributos
    private $matricula;
    private $curso;
    
    // Métodos Públicos
    public function pagarMensal() {
        echo "<p>pagando mensalidade do aluno $this->nome</p>";
    }
    
    // Métodos Especiais
    public function getMatricula () {
        return $this->matricula;
    }
    public function setMatricula ($m) {
        $this->matricula = $m;
    }
    
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($c) {
        $this->curso = $c;
    }
}
