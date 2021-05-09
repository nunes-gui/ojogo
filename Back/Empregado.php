<?php

class Empregado {

    protected $numero;
    protected $nome;

    public function Empregado($numero, $nome) {
    
        $this->numero = $numero;
        $this->nome = $nome;
    }
    
    public function getNome() {
    
        return $this->nome;
    }
    
    public function getNumero() {
    
        return $this->numero;
    }


}

?>
