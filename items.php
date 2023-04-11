<?php
    $result = $conn->query("SELECT items.id as id, items.name as iname, items.price as price, categories.name as cn FROM items, categories WHERE items.id_category = categories.id");
    echo ("<table border=1>
    <tr><th>id</th><th>Hаименование</th><th>Цена</th><th>Категория</th></tr>");
    while ($row = $result->fetch()) {
        echo ("<tr><td>".$row['id']."</td><td>".$row['iname']."</td><td>".$row['price']."</td><td>".$row['cn']."</td></tr>");
    }
    echo("</table");

