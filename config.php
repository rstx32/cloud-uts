<?php

    $server = "localhost";
    $user = "rstx";
    $pass = "123";
    $db = "cloud";

    $db = mysqli_connect($server, $user, $pass, $db);

    if(!$db){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>
