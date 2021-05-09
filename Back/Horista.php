<?php

class Horista extends Empregado {

    public $valorHora;
    public $horaTrabalhada;

    public function Horista($numero, $nome, $valorHora, $horaTrabalhada) {
    
        parent::Empregado($numero, $nome);
        $this->valorHora = $valorHora;
        $this->horaTrabalhada = $horaTrabalhada;
    }
    
    public function valorSalario() {
    
        return $this->horaTrabalhada * $this->valorHora;
    }


}

?>