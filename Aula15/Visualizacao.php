<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualiacao {
    // Atributos
    private $espectador;
    private $filme;
    
    // Construtor
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    
    // Métodos Públicos
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    
    public function avaliarPorc($porc) {
        $nova = 0;
        if($porc < 20) {
            $nova = 3;
        } else if ($porc <= 50) {
            $nova = 5;
        } else if($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        
        $this->filme->setAvaliacao($nova);
    }
    
    // Métodos Especiais
    function getEspectador() {
        return $this->espectador;
    }
    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function getFilme() {
        return $this->filme;
    }
    function setFilme($filme) {
        $this->filme = $filme;
    }

    
}

