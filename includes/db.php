<?php
try {
    $dsn = 'mysql:host=localhost;dbname=aureleDB;charset=utf8mb4';
    $db_user = 'root'; 
    $db_pass = 'admin';

    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>