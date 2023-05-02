<?php
session_start(["use_strict_mode" => true]);
include ("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <link href="style.css" rel="stylesheet" />
    <script src="props.js"></script>
</head>
<body>
<div class="container">
    <div class="header">

        <!--    <img src="uploads/file528900.png" width="120" height="120" alt="Logo"/>-->
        <div class="menuitem col">
            <a href="?page=additem">Добавить товар</a>
        </div>
        <div class="menuitem col">Заказы</div><div class="menuitem col">Доставка</div><div class="menuitem col">
            <?php

            if (isset($_SESSION['username'])) {

                ?>

                <?=$_SESSION['username']?>
                <a href='auth.php?logout=1'>Выйти</a>

            <?php }
            else{
            ?>

            <a href="?page=login">Войти</a>
            <?}?>
        </div>

    </div>


    <div class="main">
        <div class="submenu">
                <? require ("categories.php") ?>
        </div>
        <div class="content">

            <?
            switch ($_GET['page']) {
                case 'items':
                    require ("items.php");
                    break;
                case 'login':
                    require ("authform.php");
                    break;
                case 'additem':
                    require ("itemform.php");
                    break;
            }
            ?>
            <?
            echo ("<p style='color: red'>".$_SESSION['message']."</p>");
            unset($_SESSION['message']);
            ?>

        </div>
    </div>
</div>
</body>
</html>