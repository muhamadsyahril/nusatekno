<?php
$db_hostname = 'localhost';
$db_name = 'nusatekno';
$db_username = 'root';
$db_password = '';

try {
    $db = new PDO("mysql:host=$db_hostname;dbname=$db_name", $db_username, $db_password);
} catch(PDOException $e) {
    echo $e->getMessage();
}