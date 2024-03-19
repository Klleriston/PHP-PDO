<?php

$databasePath = __DIR__ . "/../Database.sqlite";

try {
    $pdo = new PDO("sqlite:$databasePath");
    echo "Sucess";
} catch (PDOException $e) {
    echo "Error " . $e->getMessage() . PHP_EOL ;
}