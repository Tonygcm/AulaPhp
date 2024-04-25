<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GetPost</title>
</head>

<body>
    <h3>Form Get</h3>

    <form action="funcoes" method="GET">
        <label> Digite seu nome: </label>
        <input name="nome" type="text">
        <label> Digite seu email: </label>
        <input name="email" type="text">
        <button type=" submit">Enviar</button>
    </form>

    <?php
    /* 
    Criar um sistema de registro de usuário em PHP. Após a validação dos dados do formulário, o usuário deve ser redirecionado para uma página de sucesso ou uma página de erro, dependendo do resultado da validação.

    Requisitos:

    Criar um arquivo chamado funcoes.php que contenha as seguintes funções:

    validar_nome_usuario($nome): Valida se o nome de usuário contém apenas letras e números.
    validar_email($email): Valida se o e-mail possui um formato válido.
    validar_senha($senha): Valida se a senha tem pelo menos 6 caracteres.


    Criar duas páginas PHP diferentes: registro_get.php e registro_post.php.*/


    ?>
</body>

</html>