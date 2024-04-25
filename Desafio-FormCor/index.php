<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cor</title>
</head>

<body>



    <h3>Form troca cor: </h3>

    <form action="" method="GET">
        <label> Selecione uma cor: </label>
        <input name="cor" type="color">
        <button type=" submit">Enviar</button>
    </form>

    <?php
    //Crie um formulário onde o usuário seleciona uma cor em um input color e que altere a cor de fundo da página.

    // isset confere se o valor foi declarado e diferente de null

    if (isset($_GET['cor'])) {
        $cor = $_GET['cor'];
        echo "<style>body {background-color: $cor;}</style>";
    }


    ?>

</body>

</html>