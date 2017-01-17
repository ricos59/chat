<?php

session_start();
require_once("includes/account.php");

$login = $_POST["login"];
$password = $_POST["password"];

if (createAccount($login, $password) == true) {
    echo "Votre compte a été créé avec succès";
} else {
    echo "Ce compte existe déjà";
}
?>
