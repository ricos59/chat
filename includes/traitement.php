<?php

include 'connexionDB.php';

$message = $_POST["message"];
$login = $_POST["login"];

$sql = "SELECT * FROM users WHERE login = '" . $login . "'";

global $mysqli;
$result = mysqli_query($mysqli, $sql);
$array = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql2 = "INSERT INTO message (message, id_pseudo) VALUES ('" . $message . "', '" . $array[0]["id"] . "')";
$result2 = mysqli_query($mysqli, $sql2);
