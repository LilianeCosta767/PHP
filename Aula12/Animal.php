<?php
abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();
    
    function getPeso() {
        return $this->peso;
    }
    function setPeso($peso) {
        $this->peso = $peso;
    }
    
    function getIdade() {
        return $this->idade;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }

    function getMembros() {
        return $this->membros;
    }
    function setMembros($membros) {
        $this->membros = $membros;
    }


}
