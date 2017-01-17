<?php

require_once('connexionDB.php');

    $sql = "SELECT * FROM `message` INNER JOIN users ON users.id=message.id_pseudo ORDER BY date ASC ";
    global $mysqli;
    $result = mysqli_query($mysqli, $sql);

// Fetch all
    $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    print json_encode($array);
    
