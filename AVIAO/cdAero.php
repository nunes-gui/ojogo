<?php

include_once('./conexaobd.php');


$sigla = $_POST["sigla"];
$nome = $_POST["nome"];

$conexaobd = new conexaobd;

$conect = $conexaobd->__construct();

$queryValidacaoSigla = "SELECT * FROM aeroporto WHERE SIGLA " . "= '$sigla'";

$siglaEncontrada = mysqli_query($conect, $queryValidacaoSigla);

$total = mysqli_num_rows($siglaEncontrada);

if($total) {

    echo "A SIGLA " . $sigla . " Já está cadastrada no sistema!";
    mostraCadastrados($conect);
    
} else {
         
    $query = "INSERT INTO aeroporto (SIGLA, NOME_AEROPOTO) values ('$sigla', '$nome')";

    mysqli_query($conect, $query) or die("Não foi possível executar a inserção");
    
    echo "Cadastro realizado com sucesso!";
    
    mostraCadastrados($conect);
    
}


function mostraCadastrados($conect) {

    $queryTodosCadastros = "SELECT * FROM aeroporto";
    
    $result = mysqli_query($conect, $queryTodosCadastros);
    
    while($linha = mysqli_fetch_assoc($result)) {
    
        echo "<br><br>SIGLA: " . $linha["SIGLA"] . "<br>Nome: " . $linha["NOME_AEROPOTO"];
    
    }
    
}

?>