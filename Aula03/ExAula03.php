<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula3</title>
</head>

<body>

    <h2>Exercicios Input</h2>
    <form action="" method="GET">
        <label>Número 1: </label>
        <input name="num1" type="text">
        <label>Número 2: </label>
        <input name="num2" type="text">

        <button type="submit">Enviar</button>
    </form>


</body>

</html>

<?php

/*   
     - Faça um Programa que peça dois números e imprima o maior deles.
    */

echo "<h3>Exercicio 01</h3>";
    
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "<p>Numero 1: " . $num1;
echo "<br>Numero 2: " . $num2;
echo "</p>";

if ($num1 > $num2) {
    echo "<p>O maior numero eh: " . $num1;
} else if ($num2 > $num1) {
    echo "<p>O maior numero eh: " . $num2;
} else {
    echo "<p>Os numeros sao iguais!";
}



/*
     - Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.
*/

echo "<h3>Exercicio 02</h3>";

$num1 = $_GET['num1'];

echo "<p>Numero: " . $num1;
echo "</p>";

if($num1 >= 0){
    echo "<p>O numero eh positivo. ";
}
else{
    echo "<p>O numero eh negativo. ";
}

/*
     - Faça um Programa que verifique se uma letra digitada é "F" ou "M". 
        Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.
    */

    echo "<h3>Exercicio 02</h3>";
    
/*
     - Faça um Programa que verifique se uma letra digitada é vogal ou consoante.
    */

/*
     - Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:
     a. A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
     b. A mensagem "Reprovado", se a média for menor do que sete;
     c. A mensagem "Aprovado com Distinção", se a média for igual a dez.
    */

?>