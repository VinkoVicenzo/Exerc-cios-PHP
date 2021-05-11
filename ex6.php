<!DOCTYPE html>
<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Vinko Vicenzo Tomljanovie">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">    
        <title>Exercício 6</title>
    </head>
    <body>
        <a href="./index.php"><h1>EXERCÍCIOS 6</h1> </a>
    <?php
        /*6)criar uma função que retorne um array contendo números inteiros. Como entrada a função deve receber 
        a quantidade de elementos do array e por qual numero os elementos do array devem ser divisíveis.*/

        $num = rand(0,100);
        $numeroDiv=3;
        
        function retorneArray($num,$numeroDiv){
            $inteiros = array();
            for($i=0;$i<10;$i++){
                $numAleatorio = rand(0,100);
                if($numAleatorio%$numeroDiv==0 && $numAleatorio != 0){
                    $int[$i]=$numAleatorio;
                    echo "<h1>$int[$i]</h1>";
                }else{
                    $i--;
                }
            }
        }
        retorneArray($num,$numeroDiv);

    ?>
    </body>
</html>