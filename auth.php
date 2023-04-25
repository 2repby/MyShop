<?php
    session_start(["use_strict_mode" => true]);
    require('dbconnect.php');
    unset($_SESSION['message']);
    if (isset($_POST['login'])){
//        echo ("SELECT * FROM users WHERE email = ".$_POST['login']); die();
        $result = $conn->query("SELECT * FROM users WHERE email = '".$_POST['login']."'");

        if ($row = $result->fetch())
        {
            if (MD5($_POST["password"]) == $row['password']){
                $_SESSION['username'] = $_POST['login'];
                header("Location: index.php.old");
                die();
            }
            else {
                $_SESSION['message'] = 'Вы ввели неправильный пароль!';
                header("Location: index.php.old");
                die();
            }

        }
        else {
            $_SESSION['message'] = 'Вы ввели неправильный логин!';
            header("Location: index.php.old");
            die();
        }

    }
    if ($_GET['logout'] == 1){
        session_unset();
        $_SESSION['message'] = 'Вы успешно вышли из сиситемы';
        header("Location: index.php.old");
        die();
    }
