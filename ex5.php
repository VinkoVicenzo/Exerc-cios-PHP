<!DOCTYPE html>
<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Vinko Vicenzo Tomljanovie">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Exercício 5</title>
    </head>
    <body>
        <a href="./index.php"> <h1>EXERCÍCIOS 5</h1> </a>
    <?php
        /*5)Criar um algoritmo que forme um array contendo 10 números inteiros gerados de
        aleatoriamente. Os valores gerados devem estar no intervalo de 10 e 50.*/

        $num [10] = array();

        for ($i=0; $i<10 ; $i++){
            $num[$i] = rand(10,50);
            var_dump($num[$i]);
        }   

    ?>
    </body>
</html>