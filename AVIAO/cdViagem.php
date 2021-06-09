<?php

include_once('./conexaobd.php');


$codigo = $_POST["codigo"];
$selectO = $_POST["selectO"];
$selectD = $_POST["selectD"];
$data = $_POST["data"];
$hora = $_POST["hora"];

$conexaobd = new conexaobd;

$conect = $conexaobd->__construct();

$queryValidacaoCodigo = "SELECT * FROM viagem WHERE codigo " . "= '$codigo'";

$codigoEncontrado = mysqli_query($conect, $queryValidacaoCodigo);

$total = mysqli_num_rows($codigoEncontrado);

if($total) {

    echo "A Codigo de viagem " . $codigo . " Já está cadastrado no sistema!";
    mostraCadastrados($conect);
    
} else {

    $data = date('Y-m-d', strtotime($data));    
         
    $query = "INSERT INTO viagem (CODIGO, ORIGEM, DESTINO, DT, HR) values ('$codigo', '$selectO', '$selectD', '$data', '$hora')";
    
    mysqli_query($conect, $query) or die("Não foi possível executar a inserção");
    
    echo "Cadastro realizado com sucesso!";
    
    mostraCadastrados($conect);
    
}


function mostraCadastrados($conect) {

    $queryTodosCadastros = "SELECT * FROM viagem";
    
    $result = mysqli_query($conect, $queryTodosCadastros);
    
    while($linha = mysqli_fetch_assoc($result)) {
    
        echo "<br><br>Codigo: " . $linha["CODIGO"] . "<br>Origem: " . $linha["ORIGEM"] . "<br>Destino: " . $linha["DESTINO"] . "<br>Data: " . date('d-m-Y',strtotime($linha["DT"])) . "<br>Hora: " . $linha["HR"];
    
    }
    
}

?>