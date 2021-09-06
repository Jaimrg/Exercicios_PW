<?php

    print "<form method=POST action = Exercicio_4.php>";
        for($i=0;$i<2;$i++){        
            print "<input type=text class=form-control  placeholder=Nota 1 name=nota1$i>";            
        }            
        print "<input type=submit> value=submit";                   
    print "</form>";


    $array= array();
    if(isset($_POST['nota10'])){
        //for($i=0;$i<2;$i++){        
            $array[]= htmlspecialchars($_REQUEST['nota1']);
        //}
        foreach ($array as $valor){ 
            echo $valor. "</br>";
        }
    }


?>