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
</head>
<body>
<div class="container">
    <div class="header">

        <!--    <img src="uploads/file528900.png" width="120" height="120" alt="Logo"/>-->
        <div class="menuitem col">Товары</div><div class="menuitem col">Заказы</div><div class="menuitem col">Доставка</div><div class="menuitem col">Профиль</div>

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
                case 1:
                    echo "i equals 1";
                    break;
                case 2:
                    echo "i equals 2";
                    break;
            }
            ?>




        </div>
    </div>
</div>
</body>
</html>