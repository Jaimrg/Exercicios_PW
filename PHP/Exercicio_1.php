<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1_PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
    
</head>
<body>
    <div class="container">
        <h1>Exercicio 1</h1>
        <p>Dada uma string, realizar as substituições "a", "B", "e", "i", "o", "t" 
        respectivamente por "@", "8", "E", "1", "0", "7"</p>

        <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">            
            <div class="col-auto">
              
              <input type="text" class="form-control" id="texto" placeholder="String" name="texto">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Trocar</button>
            </div>
            <br>
            <p>Resultado: </p>
            
        </form>

        <p>
                <?php
                   $name="";
                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                       
                       $texto = htmlspecialchars($_REQUEST['texto']);                        
                      $primeiras = ["a", "B", "e", "i", "o", "t"];
                      $resultado = ["@", "8", "E", "1", "0", "7"];
                       $novo_texto = str_replace($primeiras,$resultado,$texto);
                       echo $novo_texto;
                   }
                   
                ?>
            </p>
    </div>  


   
</body>
</html>