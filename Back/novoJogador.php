<?php

$request = isset($_REQUEST["inc"]) ? $_REQUEST["inc"] : "index.html";

include_once('./dbConn.php');


    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $usuario = $_POST["usuario"];

    if(insereNovoJogador($login, $senha, $usuario)){

        header("Location: ../HTML/inicio.html");
        die();
    } else {
        header("Location: ../HTML/errou.html");
        die();
    }

    function insereNovoJogador($login, $senha, $usuario) {

        $dbClass = new conecta;
        $conexao = $dbClass->__construct();
        
        $q1 = "SELECT * FROM CADASTRO_PLAYER";
        
                
        $id = mysqli_query($conexao, $q1);
        
        print_r($id);
        
        $id = mysqli_num_fields($id);
        
        echo $id;

        $query = "INSERT INTO CADASTRO_PLAYER (ID_JOGADOR, USER_NAME, PASS, USER_LOGIN) VALUES('$id', '$login', '$senha', '$usuario')";
        
        $inserido = mysqli_real_query($conexao, $query);
        
        mysqli_close($conexao);
        
        return $inserido;
    }

?>