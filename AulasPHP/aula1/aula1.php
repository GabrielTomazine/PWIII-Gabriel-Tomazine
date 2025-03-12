<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
</head>
<body>
    
    <?php
    //Exercícios
    
    echo "1-) ";
    
    $val1 = 10;
    $val2 = 10;
    $val3 =  10;
    
    $result = ($val1 + $val2 + $val3) /3;
    
    echo "Média: ", $result;
    
    echo "<br><br><br><br>";
    
    echo "2-) ";
    
    $val4 = 50;
    $result2 = ($val4 / 100) * 15;
    echo "O Resultado de 15% do valor total é: ", $result2;
    
    echo "<br><br><br><br>";
    
    echo "3-) ";
    
    $val5 = 50;
    $result3 = ($val5 / 100) * 5;
    $result4 = ($val5 / 100) * 50;

    echo "O Resultado de 5% do valor total é: ", $result3, " , o resultado de 50% do valor total é: ", $result4;

    echo "<br><br><br><br>";
    
    echo "4-) ";

    $val6 = 9;
    $raiz = pow($val6, 2);
    $val7 = 9;
    $raiz2 = pow($val7, 2);
    $result5 = $raiz + $raiz2;

    echo "A soma dos números quadrados é: ", $result5;

    echo "<br><br><br><br>";
    
    echo "5-) ";
    
    $altura = 1.8;
    $peso = 70;
    $imc = $peso / ($altura * $altura);

    echo "O valor do IMC é: ", $imc;

    echo "<br><br><br><br>";
    
    echo "5-) ";

    $val8 = 200;
    
    ?>

</body>
</html>
