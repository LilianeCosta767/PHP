<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    // Atributos
    private $titulo;
    private $avalicao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    // Construtor
    public function __construct($t) {
        $this->titulo = $t;
        $this->avalicao = 1;
        $this->curtidas = 0;
        $this->views = 0;
        $this->reproduzindo = false;
    }

    // Métodos da Interface
    public function like() {
        $this->curtidas++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }

    // Métodos Especiais
    function getTitulo() {
        return $this->titulo;
    }
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function getAvalicao() {
        return $this->avalicao;
    }
    function setAvaliacao($avalicao) {
        $media = 0;
        $media = ($this->avalicao + $avalicao) / $this->views;
        $this->avalicao = $media;
    }

    function getViews() {
        return $this->views;
    }
    function setViews($views) {
        $this->views = $views;
    }


    function getCurtidas() {
        return $this->curtidas;
    }
    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }
    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }


}
