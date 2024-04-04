<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula05</title>
</head>
<body>

<?php

//Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos.

    echo "<h1>Exercício 01</h1>";

    function somar($num1, $num2, $num3){
        $soma = $num1 + $num2 + $num3;
        echo $soma;
    }

    somar(50, 50, 50);


?>

<?php

/*Construa uma função que receba uma data no formato DD/MM/AAAA e devolva uma string no formato "DD de Mês (por extenso) de AAAA". Opcionalmente, valide a data e retorne NULL caso a data seja inválida.
a. Entrada: 10/03/2023
b. Saída: 10 de Março de 2023
*/

echo "<h1>Exercício 02</h1>";

function data($dia, $mes, $ano){
    if ($dia > 31 || $dia <=0 || $mes > 12 || $mes <= 0 || $ano < 0 ) {
        echo "Data Inválida";
        return NULL;
    }
    else if($mes == 3){
        $mesExt = "Março";
    }
    echo $dia . " de " . $mesExt . " de " . $ano;
}

data(10,03,2023);

?>

    
</body>
</html>