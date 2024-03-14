<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <h2>Calculadora de Fahrenheit para celsius</h2>
    <form action="" method="GET">
        <label>Graus Fahreinheit:</label>
        <input name="num" type="text">

        <button type="submit">Calcular</button>
    </form>


</body>

</html>


<?php
$fahrenheit = $_GET['num']; // input
$celsius = 5 * ($fahrenheit - 32) / 9;


echo "<p>Voce escolheu " . number_format($fahrenheit, 2, ',', '.') . " °F";
echo "<br>Isso equivale a " . number_format($celsius, 2, ',', '.') . " °C</p>";

echo "<h3> Funcoes uteis </h>";
echo "<p>";
echo "<br>Abs - Módulo: " . abs($fahrenheit); // |-4| |4| = 4
echo "<br>Potencia: " . pow($fahrenheit, 2);
echo "<br>raiz Quadrada: " . sqrt($fahrenheit);

$numero = 5.4;

echo "</p>";
echo "<br>Arredontar Normal: " . round($numero);
echo "<br>Arredontar p Baixo: " . floor($numero);
echo "<br>Arredontar p Cima: " . ceil($numero);
echo "<br>Parte inteira: " . intval($numero);
echo "</p>";

echo "<h3> Mini Matematica <h/3>";




?>