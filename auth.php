<?php
    session_start(["use_strict_mode" => true]);
    unset($_SESSION['message']);
    if (isset($_POST['login'])){
        if ($_POST['login'] == 'kda'){
            if ($_POST['password'] == '12345'){
                $_SESSION['username'] = $_POST['login'];
                header("Location: authform.php");
                die();
            }
            else {
                $_SESSION['message'] = 'Вы ввели неправильный пароль!';
                header("Location: authform.php");
                die();
            }

        }
        else {
            $_SESSION['message'] = 'Вы ввели неправильный логин!';
            header("Location: authform.php");
            die();
        }

    }
    if ($_GET['logout'] == 1){
        session_unset();
        $_SESSION['message'] = 'Вы успешно вышли из сиситемы';
        header("Location: authform.php");
        die();
    }
