<?php

if (isset($_POST['login']) && trim($_POST['login']) !== '') {
    $login = htmlentities($_POST['login']);
    session_start();
    $_SESSION['login'] = $login;
}

header("Location: ./index.php");
