<?php
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    // Construtor
    public function __construct($n, $na, $i, $a, $p, $v, $d, $e) {
        $this->nome = $n;
        $this->nacionalidade = $na;
        $this->idade = $i;
        $this->altura = $a;
        $this->setPeso($p);
        $this->vitorias = $v;
        $this->derrotas = $d;
        $this->empates = $e;
        
    }
    
    // Métodos Públicos
    public function apresentar() {
        echo "<p>-------------------------</p>";
        echo "<p>Chegou a hora! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg";
        echo "<br>Ele tem " . $this->getVitorias() . "vitórias";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
    } 
    
    public function status() {
        echo "<p>-------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes ";
        echo " perdeu " . $this->getDerrotas() . " vezes ";
        echo " e empatou " . $this->getEmpates() . " vezes ";
    }
    
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    // Métodos Especiais
    function getNome() {
        return $this->nome;
    }
    function setNome($n) {
        $this->nome = n;
    }
    
    function getNacionalidade() {
        return $this->nacionalidade;
    }
    function setNacionalidade($na) {
        $this->nacionalidade = na;
    }
    
    function getIdade() {
        return $this->idade;
    }
    function setIdde($i) {
        $this->idade = i;
    }
    
    function getAltura() {
        return $this->altura;
    }
    function setAltura($a) {
        $this->altura = a;
    }
    
    function getPeso() {
        return $this->peso;
    }
    function setPeso($p) {
        $this->peso = $p;
        $this->setCategoria();
    }
    
    function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if($this->getPeso() < 52.2) {
            $this->categoria = "Invalido";
        } else if ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } else if($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } else if($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }
    
    function getVitorias() {
        return $this->vitorias;
    }
    function setVitorias($v) {
        $this->vitorias = v;
    }
    
    function getDerrotas() {
        return $this->derrotas;
    }
    function setDerrotas($d) {
        $this->derrotas = $d;
    }
    
    function getEmpates() {
        return $this->empates;
    }
    function setEmpates($e) {
        $this->empates = e;
    }
}
