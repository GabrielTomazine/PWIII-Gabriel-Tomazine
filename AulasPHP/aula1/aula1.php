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

    
    ?>

    <form action="ex2.php" method="POST">
        <input type="number" name='num' id='num'>
        <input type="Submit" value="Enviar">
    </form>
    
</body>
</html>
