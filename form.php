<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $host = 'localhost';
        $db = 'car_painting';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db; charset=$charset";
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        $name = $_POST['name'] ?? '';
        $number = $_POST['number'] ?? '';
        $product = $_POST['product'] ?? '';
        $way = $_POST['way'] ?? '';
        $comm = $_POST['comm'] ?? '';
        $query = "INSERT INTO forma(name, number, product, way, comment) VALUES('$name', '$number', '$product', '$way', '$comm')";
        

        $res = $pdo->query($query);

    ?>
</body>
</html>