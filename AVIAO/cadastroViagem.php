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
    <h1>Cadastrar Viagem</h1>
    
    <form action="cdViagem.php" method="POST">
        
    <p>Codigo  <input type="" name="codigo" id="codigo" required></p>
    <p>Origem 
        <select name="selectO">
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
    <select name="selectD">
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
    <p>Data <input type="date" name="data" id="data" required></p>
    <p>Hora <input type="time" name="hora" id="hora" required></p>
    
    <p><button  type="submit">Cadastrar</button></p>
    <p><button  type="button"><a href="index.html">Voltar </a></button></p>
    </form>
</body>
</html>
<script type="text/javascript" src="jquery-1.10.1.js"></script>
<script type="text/javascript">
    
    

</script>