<?php
$result = $conn->query("SELECT categories.id as cid, categories.name as cn, count(*) as quant FROM items, categories WHERE items.id_category = categories.id GROUP BY categories.id");


while ($row = $result->fetch()) {
    echo ("<a href='index.php?page=items&id=".$row['cid']."'><div class='submenuitem'>".$row['cn']." (".$row['quant'].") </div></a>");

}

