<?php
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;
    
    public function alimentar() {
        echo "<p>Comendo substancias</p>";
    }

    public function emitirSom() {
        echo "<p>peixe nao faz som</p>";
    }

    public function locomover() {
        echo "<p>nadando</p>";
    }
    
    public function soltarBolha() {
        echo "<p>soltando bolha</p>";
    }
            
    function getCorEscama() {
        return $this->corEscama;
    }
    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
