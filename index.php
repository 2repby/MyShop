<?php
    session_start(["use_strict_mode" => true]);
    include ("dbconnect.php");
    include ("header.php");
    include ("authform.php");
    switch ($_GET['page']){
        case 'items':
            include "items.php";
            break;
        case 'orders':
            include "orders.php";
            break;
    }
    include ("footer.php");