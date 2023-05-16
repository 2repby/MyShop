<?php
//var_dump($_GET);
//echo $_GET['name'];
//var_dump($_POST);
session_start(["use_strict_mode" => true]);
require('dbconnect.php');
var_dump($_FILES);
for ($i = 0; $i < count($_FILES['picture']['tmp_name']); $i++) {
    $file = fopen($_FILES['picture']['tmp_name'][$i], 'r+');
    $target_dir = "uploads/";
    //получение расширения
    $ext = explode('.', $_FILES["picture"]["name"][$i]);
    $ext = $ext[count($ext) - 1];
    $filename = 'file' . rand(100000, 999999) . '.' . $ext;
    echo $filename;
    move_uploaded_file($_FILES["picture"]["tmp_name"][$i], $target_dir . $filename);
    $img_urls = $img_urls.", ".$filename;
}

$img_urls = substr($img_urls, 2);

echo ("INSERT INTO items (name, price, id_category, description, img_url) 
    VALUES ('".$_POST['name']."',".$_POST['price'].",".$_POST['category'].",'".$_POST['description']."','".$img_urls."')");
$result = $conn->query("INSERT INTO items (name, price, id_category, description, img_url) 
    VALUES ('".$_POST['name']."',".$_POST['price'].",".$_POST['category'].",'".$_POST['description']."','".$img_urls."')");

header("Location: /?page=items");
die();
//setcookie('name', $_POST['name']);
