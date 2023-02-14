<?php
//var_dump($_GET);
//echo $_GET['name'];
//var_dump($_POST);

var_dump($_FILES);
for($i=0; $i<count($_FILES['picture']['tmp_name']); $i++) {
    $file = fopen($_FILES['picture']['tmp_name'][$i], 'r+');
    $target_dir = "uploads/";
    //получение расширения
    $ext = explode('.', $_FILES["picture"]["name"][$i]);
    $ext = $ext[count($ext) - 1];
    $filename = 'file' . rand(100000, 999999) . '.' . $ext;
    echo $filename;
    move_uploaded_file($_FILES["picture"]["tmp_name"][$i], $target_dir . $filename);

}

setcookie('name', $_POST['name']);
