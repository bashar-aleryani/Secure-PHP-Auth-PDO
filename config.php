<?php
session_start();

$host = "localhost";
$db   = "secure_login";
$user = "secure_user";
$pass = "StrongPassword123!";
$charset = "utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=$charset",
        $user,
        $pass,
        $options
    );
} catch (PDOException $e) {
    die("Database connection failed");
}
