<?php
echo "<p>php is running!</p>";
try {
    $db = new PDO('mysql:host=database;dbname=db;charset=utf8mb4', 'dbuser', 'password');
    echo "<p>connected to mysql database!</p>";
} catch(PDOException $e) {
    print "<p>Error on database connection!: " . $e->getMessage() . "</p>";
    die();
}