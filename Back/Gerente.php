<?php

class Gerente extends Empregado {

    public $salarioMensal;

    public function Gerente($numero, $nome, $salarioMensal) {
    
        parent::Empregado($numero, $nome);
        $this->salarioMensal = $salarioMensal;
    }
    
    public function valorSalario() {
    
        return $this->salarioMensal;
    }


}

?>