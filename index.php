<?php

if(isset($_GET['add'])) {
    $id = strip_tags($_GET["id"]);
    var_dump($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Geladeira <a href="?add=1">Add</a> R$ 1000</li>
        <li>Mouse <a href="?add=2">Add</a> R$ 2000</li>
        <li>Teclado <a href="?add=3">Add</a> R$ 100</li>
        <li>Monitor <a href="?add=4">Add</a> R$ 50</li>
    </ul>
</body>
</html>
