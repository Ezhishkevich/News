<!DOCTYPE html>
<html lang="ru">
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="header-content">
                <div class="header-tab-one"><a href="#">О нас</a>
                </div>
                <div class="header-tab-two"><a href="#">Контакты</a></div>
                <div class="header-tab-three"><a href="#">Фото</a></div>
                <div class="header-tab-fore"><a href="#">Подписка</a></div>
                <div class="header-tab-five"><a href="#">Документы</a></div>
            </div>
</header>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/News/css/forma.css.">

    <title>Document</title>
</head>
<div class="container">

    <div class="forma">
        <form action="registr.php" metod="GET">
            <h1 class="title">Регистрация </h1>
            <input name="login" type="text" placeholder="login" pattern="[A-Za-zА-Яа-яЁё \s 0-9]{3,}">
            <input name="pass" type="text" placeholder="prassword" pattern="[A-Za-zА-Яа-яЁё \s 0-9]{3,}">
            <input name="repeatprasssword" type="text" placeholder="repeat prasssword" pattern="[A-Za-zА-Яа-яЁё \s 0-9]{3,}">
            <input name="email" placeholder="email" type="email">
            <button type="submit" class="send-message">Зарегистрироватся</button>
        </form>

        <form action="login.php" metod="GET">
            <h2> Вход</h2>
            <input name="login" type="text" placeholder="login" pattern="[A-Za-zА-Яа-яЁё \s 0-9]{3,}">
            <input name="pass" type="text" placeholder="prassword" pattern="[A-Za-zА-Яа-яЁё \s 0-9]{3,}">

            <button type="submit" class="send-message">Войти </button>

        </form>
    </div>
</div>