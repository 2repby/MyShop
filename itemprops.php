<?php
    session_start(["use_strict_mode" => true]);
    include ("dbconnect.php");
    $result = $conn->query("SELECT * FROM categories 
                        WHERE  id = ".$_GET['id']);
    echo ($result->fetch()['properties']);