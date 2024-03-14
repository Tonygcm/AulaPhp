<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <h2>Eu posso dirigir? (legalmente)</h2>
    <form action="" method="GET">
        <label>Ano em que a pessoa nasceu:</label>
        <input name="ano" type="text">

        <button type="submit">Enviar</button>
    </form>


</body>

</html>


<?php

    $ano = $_GET['ano'];
    $idade = 2024 - $ano;

    echo "<p>Ano: " . $ano;
    echo "<br>Idade: " . $idade;
    echo "</p>";

    if($idade >= 18 && $idade <70){
        echo "<p>Legal, voce pode dirigir! - e votar!</p>";
    }
    else if($idade >= 16 || $idade >= 70){
        echo "<p>Voto opcional</p>";
    }
    else{
        echo "<p>Poxa, espera mais um pouco: </p>";
    }
        

?>