<?php

$databasePath = __DIR__ . "/../Database.sqlite";

try {
    $pdo = new PDO("sqlite:$databasePath");
    echo "Sucess";
    $pdo->exec('CREATE TABLE IF NOT EXISTS students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');
} catch (PDOException $e) {
    echo "Error " . $e->getMessage() . PHP_EOL ;
}

?>