<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    
    // Métodos Públicos
    public function detalhes() {
        echo "<hr>Livro: " . $this->titulo . " escrito por " . $this->autor;
        echo "</br>Quantidade de páginas: " . $this->totPaginas;
        echo "</br>Página atual: " . $this->pagAtual;
        echo "</br> Sendo lido por: " . $this->leitor->getNome();
    }
    
    // Métodos Especiais
    public function getTitulo() {
        return $titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function getAutor() {
        return $autor;
    }
    public function setAutor($a) {
        $this->autor = $a;
    }
    
    public function getTotPaginas() {
        return $totPaginas;
    }
    public function setTotPaginas($totPag) {
        $this->titulo = $totPag;
    }
    
    public function getPagAtual() {
        return $pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    
    public function getAberto() {
        return $aberto;
    }
    public function setAberto($a) {
        $this->aberto = $a;
    }
    
    public function getLeitor() {
        return $leitor;
    }
    public function setLeitor($l) {
        $this->leitor = $l;
    }
    
    public function abrir() {
        $this->aberto = true;
    }
    
    public function fechar() {
        $this->aberto = false;
    }
    
    public function folhear($p) {
        if($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    
    public function avancarPag() {
        $this->pagAtual ++;
    }
    
    public function voltarPag() {
        $this->pagAtual --;
    }
}
