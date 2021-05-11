<!DOCTYPE html>
<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Vinko Vicenzo Tomljanovie">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Exercício 4</title>
    </head>
    <body>
        <a href="./index.php"><h1>EXERCÍCIOS 4</h1></a> 
    <?php
        /*4) Faça uma função que receba um número inteiro, e retorne se este numero é primo ou não. 
        O valor retornado deve ser 0, caso o numero não for primo. E retorne 1 se o número for primo.*/

        $num=67;
        $primo=0;

        for($i=3; $i<$num; $i++){
            if($num%$i==0){
                $primo=0;
                break;
            }else{
                $primo=1;
                 }
            }
            
        if($primo==1)
                echo "<h3>1</hr>";
            else
                echo "<h3>0</hr>";
    ?>
    </body>
</html>