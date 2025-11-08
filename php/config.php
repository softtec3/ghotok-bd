<?php
$host = "localhost";
$user_name = "softtec3_ghotok_bd_admin";
$password = "vd)Y&$6nbw+edn%c";
try {
    $conn = new PDO("mysql:host=$host;dbname=softtec3_ghotok_bd", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (ErrorException $e) {
    echo "connection failed" . $e->getMessage();
}
