<?php

include_once('./conexaobd.php');

$data1 = $_POST["data1"];
$data2 = $_POST["data2"];

$conexaobd = new conexaobd;

$conect = $conexaobd->__construct();

echo "<h1> Lista de Viagens Encontradas </h1>";

mostraCadastrados($conect, $data1, $data2);

function mostraCadastrados($conect, $data1, $data2) {

    $data1 = date('Y-m-d', strtotime($data1));  
    $data2 = date('Y-m-d', strtotime($data2));

    $queryTodosCadastros = "SELECT * FROM viagem WHERE DT BETWEEN '$data1' AND '$data2'";
    
    
    
    $result = mysqli_query($conect, $queryTodosCadastros);
    
    while($linha = mysqli_fetch_assoc($result)) {
    
        echo "<br><br>Codigo: " . $linha["CODIGO"] . "<br>Origem: " . $linha["ORIGEM"] . "<br>Destino: " . $linha["DESTINO"] . "<br>Data: " . date('d-m-Y',strtotime($linha["DT"])) . "<br>Hora: " . $linha["HR"];
    
    }
}
?>