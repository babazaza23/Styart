<?php
$host = 'localhost';
$dbname = 'styart_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET CHARACTER SET utf8mb4");
}
catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>