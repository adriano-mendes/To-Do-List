<?php 
$hostname = 'localhost';
$database = 'to_do';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}