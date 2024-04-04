<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula03</title>
</head>
<body>
    
<form action="" method="GET">
        <label> Digite o primeiro valor: </label> 
        <input name="num1" type="text">

        <label> Digite o segundo valor: </label> 
        <input name="num2" type="text">

        <button type="submit">Enviar</button>
    </form>


<?php

    //Faça um programa que imprima na tela do 1 a 20, um abaixo do outro, depois  modifique para que mostre os numeros um ao lado do outro.
    $num = 0;

    echo "<h2>Imprimindo valores do 1 ao 20 embaixo um do outro </h2>";

    for ($i=0; $i < 20; $i++) { 
        echo "<br>" . $num += 1;
    }

    echo "<h2>Imprimindo valores do 1 ao 20 do seu próprio lado </h2>";

    $num = 0;

    for ($i=0; $i < 20; $i++) { 
        echo " " . $num += 1;
    }

?>

<?php

    //Faça um programa que imprima os valores ímpares entre os números 1 a 50.

    $imp = 1;

    echo "<h2>Imprimindo valores impares entre 1 e 50</h2>";

    echo " " . $imp;
    for ($i=0; $i < 50; $i++) { 
        if ($imp >= 49) {
            break;
        }
        echo " " . $imp += 2;
    }



?>

<?php

    //Faça um programa que receba dois números inteiros e gere os números inteiros que estão no intervalo compreendido por eles.

    

?>

</body>
</html>