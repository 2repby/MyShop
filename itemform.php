<?php
$name = $_COOKIE['name'];
$result = $conn->query("SELECT * FROM categories");

?>
<h2>
    Добавление товара
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
    <select name="category" id="select_cat" onchange="get_props()">
        <?
        while ($row = $result->fetch()) {
        ?>
        <option value="<?=$row['id']?>" selected><?=$row['name']?>
        <?
            }
        ?>

    </select><br>
    Характеристики:<br>
    <select name="features" id="select_props" multiple>
        <option value="0">На гарантии
        <option value="1">Есть дополнительный акккумулятор
        <option value="2">Зарядной устройство в комплекте
        <option value="3">USB-кабель
        <option value="4" selected>Оригинальная упаковка
    </select><br>
    Цена товара:<br>
    <input name="price" type="text" size="20" maxlength="40" value="1000"><br>
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