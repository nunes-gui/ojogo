<?php
include_once('./dbConn.php');

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    //echo "Digitado : " . $login ." - ". $senha . "<br>";

    if(validaLogin($login, $senha)) {
        header("Location: ../HTML/inicio.html");
        die();
    } else {
        header("Location: ../HTML/errou.html");
        die();
    }
    
    function validaLogin($login, $senha) {

        $dbClass = new conecta;
        $conexao = $dbClass->__construct();

        $query = "SELECT * FROM CADASTRO_PLAYER WHERE LOGIN = '$login' AND SENHA = '$senha'";

        $result = mysqli_query($conexao, $query);

        // if($result) {
        //     if($row = mysqli_fetch_array($result)) {
        //         $name = $row["USUARIO"];

        //         echo "Salve " . $name . "!! <br>";
        //         return true;
        //     }
            
        //     return false;
        // }

        return false;
    }


    echo "<br><br><br>PROJETO INICIADO! PRAZO 3 ANOS!!!";
?>