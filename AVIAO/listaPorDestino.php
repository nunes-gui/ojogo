<?php

include_once('./conexaobd.php');

$origem = $_POST["origem"];
$destino = $_POST["destino"];

$conexaobd = new conexaobd;

$conect = $conexaobd->__construct();

echo "<h1> Lista de Viagens cadastradas </h1>";

mostraCadastrados($conect, $destino, $origem);

function mostraCadastrados($conect, $destino, $origem) {

    $queryTodosCadastros = "SELECT * FROM viagem WHERE DESTINO " . "= '$destino' AND ORIGEM = '$origem'";
    
    $result = mysqli_query($conect, $queryTodosCadastros);
    
    while($linha = mysqli_fetch_assoc($result)) {
    
        echo "<br><br>Codigo: " . $linha["CODIGO"] . "<br>Origem: " . $linha["ORIGEM"] . "<br>Destino: " . $linha["DESTINO"] . "<br>Data: " . date('d-m-Y',strtotime($linha["DT"])) . "<br>Hora: " . $linha["HR"];
    
    }
    
}
?>