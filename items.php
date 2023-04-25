<?php
    $result = $conn->query("SELECT items.id as id, items.name as iname, items.price as price FROM items
                        WHERE  items.id_category = ".$_GET['id']);
    while ($row = $result->fetch()) {
        ?>
        <div class="post">
            <div class="item_field"><?=$row['id']?></div>
            <div class="item_field"><img src="img/item.png" width="30px"></div>
            <div class="item_field"><?=$row['name']?></div>
            <div class="item_field"><?=$row['price']?> руб</div>
        </div>


        <?php
    }
    ?>



