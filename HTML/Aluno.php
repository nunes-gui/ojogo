<?php

class Aluno {

    private $nome;
    private $disciplina;
    private $CH;
    private $N1;
    private $N2;
    private $N3;
    private $frequencia;

    public function __construct($nome, $disciplina, $CH, $N1, $N2, $N3, $frequencia) {
        
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->CH = $CH;
        $this->N1 = $N1;
        $this->N2 = $N2;
        $this->N3 = $N3;
        $this->frequencia = $frequencia;    
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getDisciplina() {
        return $this->disciplina;
    }
    
    public function getCargaHoraria() {
        return $this->CH;
    }
    
    public function getN1() {
        return $this->N1;
    }
    
    public function getN2() {
        return $this->N2;
    }
    
    public function getN3() {
        return $this->N3;
    }
    
    public function getFrequencia() {
        return $this->frequencia;
    }
    
    public function setNome($nome) {
        return $this->nome = $nome;
    }
    
    public function setDisciplina($disciplina) {
        return $this->disciplina = $disciplina;
    }
    
    public function setCargaHoraria($CH) {
        return $this->CH = $CH;
    }
    
    public function setN1($N1) {
        return $this->N1 = $N1;
    }
    
    public function setN2($N2) {
        return $this->N2 = $N2;
    }
    
    public function setN3($N3) {
        return $this->N3 = $N3;
    }
    
    public function setFrequencia($frequencia) {
        return $this->frequencia = $frequencia;
    }
    
    public function calculaMedia($N1, $N2, $N3) {
        $media = 0;        
        
        $media = ($N1+$N2)/2;
        
        if($media >= 6) {
            return $media;

        } else {
            if($N1 <= $N2) {
                $media = ($N2+$N3)/2;
            } else {
                $media = ($N1+$N3)/2;
            }
        }
        
        return $media;
    }

    public function imprimir() {
        $impressao = "Nome: ". $this->nome. "<br>Disciplina: " . $this->disciplina . "<br>Carga Horaria: " . $this->CH  ."<br>Frequencia: " . $this->frequencia . "<br>N1: " . $this->N1 . "<br>N2: " . $this->N2 . "<br>N3: " . $this->N3 . "<br>";
        
        return $impressao;
    }
    
    public function retornaAprovacao($media, $frequenciaCalculada) {
      
        if($media < 6 && $frequenciaCalculada > .75) {
            $aprovacao = "Reprovado por Nota: ". $media;
        } else if($media > 6 && $frequenciaCalculada < .75) {
            $aprovacao = "Reprovado por Falta: Frequencia de ".($frequenciaCalculada*100)."%";
        } else if($media < 6 && $frequenciaCalculada < .75) {
            $aprovacao = "Reprovado por Nota: ". $media ." e por Falta: Frequencia de ".($frequenciaCalculada*100)."%";
        } else {
            $aprovacao = "Aprovado!";
        }
        
        return $aprovacao;
    }
    
    public function retornaFreq($CH, $frequencia) {
        return $frequencia / $CH;
    }
}


?>