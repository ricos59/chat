<?php

$mysqli = mysqli_connect("localhost", "root", "", "chat");
if (mysqli_connect_errno()) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
