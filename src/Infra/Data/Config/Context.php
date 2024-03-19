<?php
use Alura\Pdo\Domain\Model\Student;

require_once '../../../../vendor/autoload.php';

$databasePath = __DIR__ . "/../Database.sqlite";

$pdo = new PDO('sqlite:' . $databasePath);

try {

    $student = new Student(null, 'Klleriston Andrade', new DateTimeImmutable('2003-03-05'));

    $sqlInsert = "INSERT INTO students (name, birth_date) 
                VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

    $sqlDelete = "DELETE FROM students WHERE id=(2)";

    // echo $sqlInsert;
    var_dump($pdo->exec($sqlInsert));
} catch (PDOException $e) {
    echo $e->getMessage();
}


