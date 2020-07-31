<?php
class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;
    
    // Construtor
//    function __construct($n, $i, $s) {
//        $this->nome = $n;
//        $this->idade = $i;
//        $this->sexo = $s;
//    }
    
    // Métodos Públicos
    public function fazerAniver() {
        $this->idade ++;
    }

    // Métodos Especiais
    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = $n;
    }
    
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($i) {
        $this->idade = $i;
    }
    
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($s) {
        $this->sexo = $s;
    }
}
