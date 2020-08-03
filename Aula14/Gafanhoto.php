<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    // Atributos
    private $login;
    private $totAssistido;
    
    // Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    
    // Métodos Públicos
    public function viuMaisUm() {
        $this->totAssistido++;
    }
    
    //Métodos Especiais
    function getLogin() {
        return $this->login;
    }
    function setLogin($login) {
        $this->login = $login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }
    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }


}
