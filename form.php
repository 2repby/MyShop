<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $name = $_COOKIE['name'];
?>
    <h2>
        Форма для добавления товара
    </h2>
    <form name="create_item" method="post" action="additem.php" enctype="multipart/form-data">
        <div>
        <label for="id1">Наименование товара:</label><br>
        <input name="name" id="id1" type="text" size="20" maxlength="40" value="<?=$name.' (Предыдущее значение)'?>">
        </div>
        Описание товара:<br>
        <input name="description" type="text" size="20" maxlength="40" value="Описание товара"><br>
        Тип товара:<br>
        <input type="radio" name="type" value="new" checked>Новые<br>
        <input type="radio" name="type" value="old">Б/у<br>
        <input type="radio" name="type" value="repaired">После ремонта<br>
        Категория товара:<br>
        <select name="category">
            <option value="0" selected>Смартфоны
            <option value="1">Ноутбуки
            <option value="2">Устройства ввода
            <option value="3">Аксесуары
        </select><br>
        Характеристики:<br>
        <select name="features" multiple>
            <option value="0">На гарантии
            <option value="1">Есть дополнительный акккумулятор
            <option value="2">Зарядной устройство в комплекте
            <option value="3">USB-кабель
            <option value="4" selected>Оригинальная упаковка
        </select><br>
        Комментарий:<br>
        <textarea name="comment" rows="5" cols="30">Комментарий</textarea><br>
        Имеется несколько экземпляров товара:
        <input type="checkbox" name="few_examples"><br>
        Изображение товара:<br>
        <input type="file" name="picture[]" multiple><br>
        <input type="submit" value="Добавить товар">
    </form>
</body>
</html>
