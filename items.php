<?php
    if ($_GET['id']){
        $result = $conn->query("SELECT items.id as id, items.name as iname, items.price as price, items.img_url FROM items
                        WHERE  items.id_category = ".$_GET['id']);
    }
    else{
        $result = $conn->query("SELECT items.id as id, items.name as iname, items.price as price, items.img_url  FROM items");
    }
    while ($row = $result->fetch()) {
        ?>
        <div class="post">
            <div class="item_field"><?=$row['id']?></div>
            <div class="item_field"><img src="uploads/<?=explode(', ', $row['img_url'])[0]?>" width="30px"></div>
            <div class="item_field"><?=$row['name']?></div>
            <div class="item_field"><?=$row['price']?> руб</div>
        </div>


        <?php
    }
    ?>



