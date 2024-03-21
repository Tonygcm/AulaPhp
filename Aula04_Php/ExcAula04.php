<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula4</title>
</head>

<body>

    <h2>Exercicios Input</h2>
    <form action="" method="GET">
        <label>Número 1: </label>
        <input name="num1" type="text">
        <label>Número 2: </label>
        <input name="num2" type="text">

        <label>Letra Input: </label>
        <input name="let" type="text">

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