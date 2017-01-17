<?php

require_once('connexionDB.php');

function createAccount($login, $pwd) {
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $pwd;

    $sql = "SELECT * FROM users WHERE login = '" . $login . "'";
    global $mysqli;
    $result = mysqli_query($mysqli, $sql);


// Fetch all
    $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (count($array) == 0) {
        $sql2 = "INSERT INTO users (login, password) VALUES ('" . $login . "', '" . $pwd . "')";
        $result2 = mysqli_query($mysqli, $sql2);
        return true;
    } else {
        return false;
    }
}

function checkAccount($login, $pwd) {
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $pwd;

    $sql = "SELECT * FROM users WHERE login = '" . $login . "' AND password ='" . $pwd . "' ";
    global $mysqli;
    $result = mysqli_query($mysqli, $sql);

    // Fetch all
    $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (count($array) == 0) {
        return true;
    } else {
        return false;
    }
}
