<?php
    $id = $_GET["id"];

    $pdo = new PDO("mysql:host=localhost;dbname=cars","dbuser","1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM car WHERE id=$id");
    $stmt->execute();

    $result = $stmt->fetch();
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
            --tam-marg-gen: 20px;
            --tam-img-gen: 350px;
        }

        #titMain{
            padding-left: var(--tam-marg-gen);
        }

        #infGen{
            display: inline-flex;
        }

        #imgCotxe{
            padding-left: var(--tam-marg-gen);
        }

        #infCotxe{
            margin-left: var(--tam-marg-gen);
        }

        img{
            height: var(--tam-img-gen);
        }

    </style>
    <title>Document</title>
</head>
<body>
    <h2 id="titMain"><?= $result["model"] ?></h2>
    <div id="infGen">
        <div id="imgCotxe">
            <img alt="<?= $result['photo'] ?>" src="img/<?= $result['photo']?>" />
        </div>
        <div id="infCotxe">
            <h4>Modelo</h4>
            <p><?= $result['model'] ?></p>
            <h4>Descripción</h4>
            <p><?= $result['description'] ?></p>
            <h4>Precio</h4>
            <p><?= $result['price'] ?>€</p>
            <h4>Fecha de Registro</h4>
            <p><?= $result['registration_date'] ?></p>
        </div>
    </div>
</body>
</html>
