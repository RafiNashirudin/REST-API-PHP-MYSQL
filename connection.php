<?php


    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'db_anime');


    $connection = mysqli_connect( HOST, USER, PASS, DB ) or die ('Unable connect');
?>