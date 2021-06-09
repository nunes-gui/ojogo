<?php

class conexaobd {
    
    public $hostName = 'localhost';
    public $userName = 'root';
    public $senha = '584265';
    public $dtBase = 'CVC';
    public $conn;


    function __construct() {
        return $this->conn = mysqli_connect($this->hostName, $this->userName, $this->senha, $this->dtBase);
    }

}

?>