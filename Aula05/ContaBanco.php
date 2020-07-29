<?php
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // Construtor
    public function __construct() {
//        $this->numConta = $nc;
//        $this->tipo = $t;
//        $this->dono = $d;
//        $this->saldo = $s;
//        $this->status = $stts;
        
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }

    // Métodos Públicos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "cc") {
            $this->setSaldo(50);
        } elseif ($t == "cp"){
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo "<p>ERRO! conta ainda tem dinheiro</p>";
        } elseif($this->getSaldo() < 0 ) {
            echo "<p>ERRO! conta em débito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso</p>";
        }
    }
    
    public function depositar($v) {
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v na conta de ". $this->getDono(). "</p>";
        } else {
            echo "Impossivel depositar numa conta que não existe";
        }
    }
    
    public function sacar($v) {
        if($this->getStatus()) {
            if($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "Saldo insuficiente para saqui";
            }
        } else {
            echo "Impossível sacar numa conta que não existe";
        }
        
    }
    
    public function pagarMensal() {
        if($this->getTipo() == "cc") {
            $v = 12;
        } else if($this->getTipo() == "cp") {
            $v = 20;
        }
        
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de $v debitada na cota de " . $this->getDono() . "</p>";
        } else {
            echo 'Problemas na conta, não posso cobrar';
        }
    }


    // Métodos Especiais
    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($nc) {
        $this->numConta = $nc;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    
    public function getDono() {
        return $this->dono;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($stts) {
        $this->status = $stts;
    }
}
