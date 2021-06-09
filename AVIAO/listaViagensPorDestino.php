<?php
include_once('./conexaobd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Busca de Viagem por data</h1>
    
    <form action="listaPorDestino.php" method="POST">
    
    <p>Origem 
        <select name="origem">
        <option>Selecione</option>
        <?php
          $busca_origem = "SELECT * FROM aeroporto";
          $conexaobd = new conexaobd;
          $conect = $conexaobd->__construct();          
          $result = mysqli_query($conect, $busca_origem);
          
          while($linha = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $linha['SIGLA']; ?>"> <?php echo $linha['NOME_AEROPOTO']; ?></option> 
          <?php        
          }
          ?>
      </select>
    </p>
    
    <p>Destino
    <select name="destino">
        <option>Selecione</option>
        <?php
          $busca_origem = "SELECT * FROM aeroporto";
          $conexaobd = new conexaobd;
          $conect = $conexaobd->__construct();          
          $result = mysqli_query($conect, $busca_origem);
          
          while($linha = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $linha['SIGLA']; ?>"> <?php echo $linha['NOME_AEROPOTO']; ?></option> 
          <?php        
          }
          ?>
      </select>
    </p>
    
    <p><button  type="submit">Buscar</button></p>
    <p><button  type="button"><a href="index.html">Voltar </a></button></p>
    </form>
  
</body>
</html>