<?php
abstract class Pessoa {
    // Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    
    // Métodos Públicos
    public final function fazerAniver() {
        $this->idade++;
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
