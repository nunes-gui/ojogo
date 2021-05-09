<?php

class Vendedor extends Empregado {

    public $salario_base;
    public $valor_vendas;
    public $perc_comissao;

    public function Vendedor($num, $name, $sb, $pc, $vv) {
    
        parent::Empregado($num, $name);
        $this->salario_base = $sb;
        $this->perc_comissao = $pc;
        $this->valor_vendas = $vv;
    }
    
    public function valorSalario() {
    
        return $this->salario_base + ($this->perc_comissao * $this->valor_vendas);
    }


}

?>