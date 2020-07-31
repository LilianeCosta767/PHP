<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    // Atributos
    private $matricula;
    private $curso;
    
    // Métodos Públicos
    public function cancelarMatr() {
        echo "<p>A matricula será cancelada</p>";
    }

    //Métodos Especiais
    public function getMatricula() {
        return $matricula;
    }
    public function setMatricula($m) {
        $this->matricula = $m;
    }
    
    public function getCurso() {
        return $curso;
    }
    public function setCurso($c) {
        $this->curso = $c;
    }
}
