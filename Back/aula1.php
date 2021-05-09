<?php

require_once 'Empregado.php';
require_once 'Gerente.php';
require_once 'Vendedor.php';
require_once 'Horista.php';

$e1 = new Vendedor("1010", "Guilherme", 1500, 0.05, 2500);
$e2 = new Gerente("2020", "Nunes", 3500);
$e3 = new Horista("3030", "Ferreira", 12, 35);

echo("nome: " . $e1->getNome() . "<br>");
echo("numero: " . $e1->getNumero() . "<br>");
echo("salario: " . $e1->valorSalario() . "<br>");

echo "<br><br>";

echo("nome: " . $e1->getNome() . "<br>");
echo("numero: " . $e1->getNumero() . "<br>");
echo("salario: " . $e1->valorSalario() . "<br>");

echo "<br><br>";

echo("nome: " . $e1->getNome() . "<br>");
echo("numero: " . $e1->getNumero() . "<br>");
echo("salario: " . $e1->valorSalario() . "<br>");


?>