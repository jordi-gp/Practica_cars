<?php
    $pdo = new PDO("mysql:host=localhost;dbname=cars", "dbuser", "1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM car");
    $stmt->execute();

    $result = $stmt->fetchAll();

    //var_dump($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica de repàs amb PHP</title>
</head>
<body>
    <h1>Benvingut a la tenda de cotxes</h1>

    <ul>
        <?php foreach ($result as $item) { ?>
            <a href="car_show.php?id=<?= $item['id'] ?>"><li><?= $item["model"] ?></li></a>
        <?php } ?>
    </ul>

    <a href="login.php"><p>Iniciar Sessión</p></a>
</body>
</html>
