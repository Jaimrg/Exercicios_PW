<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4_PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
        <div class="container">
             <h1>Exercicio 4</h1>
             <p>  Desenvolva um programa que leia o número de estudantes existentes em 
                uma turma e, após isto, leia as notas destes alunos, calcule e escreva a média 
                aritmética dessas notas lidas.
            </p>

            <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">            
                <div class="col-auto">
                    <input type="text" class="form-control"  placeholder="Numero de Alunos" name="numeroAlunos">
                </div>
                <div class="col-auto">
                     <input type="text" class="form-control"  placeholder="Notas" name="notas[]">
                </div>
                
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Calcular</button>
                </div>
                <br>
            </form>
            <p>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $numero_Alunos = intval(htmlspecialchars($_REQUEST['numeroAlunos']));
                        $notas = new SplFixedArray($numero_Alunos);
                        $notas = htmlspecialchars($_REQUEST['notas']);                                                
                        
                        for($i=0;$i<$numero_Alunos;$i++){
                            $notas = htmlspecialchars($_REQUEST['notas']);  
                        }                
                        echo $notas;
                    }
                   
                ?>
            </p>
        </div>
</body>
</html>