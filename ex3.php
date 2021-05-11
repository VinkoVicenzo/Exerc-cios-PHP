<!DOCTYPE html>
<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Vinko Vicenzo Tomljanovie">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Exercício 3</title>
    </head>
    <body>
        <a href="./index.php"><h1>EXERCÍCIOS 3<h1></a>
    <?php
        /*3)Faça um script PHP que exiba quantos dias faltam para o final do mês.*/

        $diaAtual = date('d');
        $mesAtual = date('m');

        if($mesAtual==1 or $mesAtual==3 or $mesAtual==5 or $mesAtual==7 or $mesAtual==8 or $mesAtual==10 or $mesAtual==12){
            $diasFaltam= 31 - $diaAtual;
            echo "<h3>Faltam $diasFaltam dias para acabar o mês!!</h3>";
        }else if($mesAtual==2){
            $diasFaltam= 28 - $diaAtual;
            echo "<h3>Faltam $diasFaltam dias para acabar o mês!!</h3>";
        }
        else{
            $diasFaltam = 30 - $diaAtual;
            echo "<h3>Faltam $diasFaltam dias para acabar o mês!!</h3>";
        }
    ?>

    </body>

</html>