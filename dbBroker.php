<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'kolokvijumi';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $database, $port);

if($conn-> connect_error) {
    echo "povezivanje sa bazom nije uspelo";
}





