Привет
<?php

    session_start(["use_strict_mode" => true]);
//    $_SESSION['username'] = 'kda';
    echo $_SESSION['username'];
 session_unset();