<?php

require_once "Aluno.php";

$nome = $_POST["nome"];
$disciplina = $_POST["disciplina"];
$CH = $_POST["ch"];
$N1 = $_POST["n1"];
$N2 = $_POST["n2"];
$N3 = $_POST["n3"];
$frequencia = $_POST["frequencia"];

$aluno = new Aluno($nome, $disciplina, $CH, $N1, $N2, $N3, $frequencia);

echo $aluno->imprimir();

$frequenciaCalculada = $aluno->retornaFreq($aluno->getCargaHoraria(), $aluno->getFrequencia());
$media = $aluno->calculaMedia($aluno->getN1(), $aluno->getN2(), $aluno->getN3());

echo "<br>";

echo $aluno->retornaAprovacao($media, $frequenciaCalculada);

?>