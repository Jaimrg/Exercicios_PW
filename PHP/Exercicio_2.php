<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2_PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
        <div class="container">
             <h1>Exercicio 2</h1>
             <p> Desenvolver um algoritmo que leia as notas da 1a., 2a. e 3a avaliações de 
                um estudante, calcule e imprima a média (simples) desse estudante. 
                Considerando que a média é ponderada e que o peso das notas é 30%, 30% 
                e 40% respectivamente. Só devem ser aceitos valores válidos durante a 
                leitura (0 a 20) para cada nota.
            </p>

            <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">            
                <div class="col-auto">
                    <input type="text" class="form-control"  placeholder="Nota 1" name="nota1">
                </div>
                <div class="col-auto">
                     <input type="text" class="form-control"  placeholder="Nota 2" name="nota2">
                </div>
                <div class="col-auto">
                     <input type="text" class="form-control"  placeholder="Nota 3" name="nota3">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Calcular</button>
                </div>
                <br>
            </form>
            <p>
                <?php
                    function calculamedia(){
                        
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nota_1 = floatval(htmlspecialchars($_REQUEST['nota1']));
                            $nota_2 = floatval(htmlspecialchars($_REQUEST['nota2']));                                                
                            $nota_3 = floatval(htmlspecialchars($_REQUEST['nota3']));
                            
                            if(($nota_1>=0 && $nota_1<=20) && ($nota_2>=0 && $nota_2<=20) && ($nota_3>=0 && $nota_3<=20)){
                                return $nota_1*0.30+$nota_2*0.30+$nota_3*0.40;
                            }
                            else {
                                return 'Ha Valores Fora Do Intervalo';
                            }
                                                                                       
                        }
                    }
                        echo calculamedia();
                ?>
            </p>
        </div>
</body>
</html>