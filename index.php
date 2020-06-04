<?php
session_start();
include_once "autorization.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Введите логин и пароль:</p>
    <form method="post">
        <p>Логин: <input type="text" name="login" > </p>
        <p>Пароль: <input type="text" name="password" > </p>
        <input type="submit" value="Ввести">
    </form>
</body>
</html>