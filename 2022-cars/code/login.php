<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        :root{
            --margin-gen: 20px;
        }

        #block_form{
            height: 10em;
            padding: 10px;
            width: 20em;
            border-radius: 10px;
            background-color: lightblue;
        }

        .campo{
            margin-left: var(--margin-gen);
        }

        #botEnv{
            margin-top: 1em;
            margin-left: 20em;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <h2>Formulari de Inicio de Sessión</h2>
    <div id="block_form">
        <form>
            <p class="campo">Usuario: <input type="text" size="30" /></p>
            <p class="campo">Contraseña: <input type="password" size="30" /></p>
            <input id="botEnv" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
