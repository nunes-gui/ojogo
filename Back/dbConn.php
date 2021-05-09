<?php

class conecta {

public $hostName = 'localhost';
public $userName = 'root';
public $senha = '584265';
public $dtBase = 'ojogo';
public $porta = '3306';
public $conn;


function __construct(){
    return $this->conn = mysqli_connect($this->hostName, $this->userName, $this->senha, $this->dtBase);
}

public static $tabelaUsuarios = "CADASTRO_PLAYER";

public static $campoUsuario = "USUARIO";
public static $campoSenha = "SENHA";
public static $campoLogin = "LOGIN";

}


?>