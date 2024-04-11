<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<h1>Aula 07 - Strings</h1>";

    function quebra()
    {
        echo "\n<br><br>\n";
    }

    $str = "um texto legal";

    echo $str;


    quebra();
    $tamanho = strlen($str);
    echo "String: {$str}";
    echo "Tamanho: {$tamanho}";

    quebra();
    for ($i = 0; $i < $tamanho; $i++) {
        echo " - " . $str[$i];
    }

    //interpolação
    echo "O valor é {$str}";

    //concatenação
    echo "O valor é: " . $str;

    quebra();
    //heredoc & nowdoc
    $v = 80;
    $heredoc = <<<Algumnome

    <h2>Exercicio 01</h2>
    <p>Faça um programa que leia dois numeros...{$v} </p>
    <p>... nete programa use formulários.</p>

    Algumnome;

    echo $heredoc;

    $nowdoc = <<<'Outronome'

    <h2>Exercicio 01</h2>
    <p>Faça um programa que leia dois numeros...{$v} </p>
    <p>... nete programa use formulários.</p>

    Outronome;



    quebra();
    $str = "A prEssa eh inimiGa da Perfeicao";
    echo "<br>String: " . $str;
    echo "<br>String: " . strlen($str);
    echo "<br>Parte: " . substr($str, 10, 5);
    echo "<br>Maiusculo: " . strtoupper($str);
    echo "<br>Minusculo: " . strtolower($str);
    echo "<br>primeira letra da frase masicula" . ucfirst(strtolower($str));
    echo "<br>primeria letra de cada palavra maiscula" . ucwords(strtolower($str));
    echo "<br>" . str_replace("da perfeicao", "do php", $str);

    /*
        number_format() // formatar numeros
        printf()

        printr() // mostra o array
        var_dump() // mostra o array e tipo de variavel

        strlen() // ver tamanho
        str_word_count()

        $resposta = "    seu    nome    ";
        trim() // retira os espaços
        ltrim()  // retira os espaços da esquerda
        rtrim() // retira os espaços da direita

        explode() // "seu nome" --> ["seu", "nome"]
        str_split()

        implode() // "seu", "nome" --> [seu nome]
        join()

        strrev() // "nome" -> "emon"

        $str = "A prEssa eh inimiGa da perfEicao";
        strpos()  // perfEicao -> posição onde está
        stripos() // Perfeicao -> posição onde está

        str_pad(); // fazer uma string ocupar uma quantidade de variaveis x

    */

    function titulo($txt, $char)
    {
        $tamanho = strlen($txt) + 10;
        echo "<br><h3>" . str_pad($txt, $tamanho, $char, STR_PAD_BOTH);
    }

    titulo("Olá Mundo", "^");


    ?>

</body>

</html>