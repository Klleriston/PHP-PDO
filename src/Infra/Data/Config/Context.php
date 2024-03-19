<?php
use Alura\Pdo\Domain\Model\Student;

require_once '../../../../vendor/autoload.php';

$databasePath = __DIR__ . "/../Database.sqlite";

$pdo = new PDO('sqlite:' . $databasePath);

try {

    $student = new Student(
        null, 
        "Klleriston Andrade', ''); DROP TABLE students; --FV", //ex sql
        new DateTimeImmutable('2003-03-05'));

    $sqlInsert = "INSERT INTO students (name, birth_date) 
                VALUES (:name, :birth_date)"; //SQLinjection, ocultar parametros

    $sqlDelete = "DELETE FROM students WHERE id=(2)";

    // echo $sqlInsert;
    $statement = $pdo->prepare($sqlInsert);
    $statement->bindValue(":name", $student->name());
    $statement->bindValue(":birth_date", $student->birthDate()->format("Y-m-d"));
    
    echo "Deu bom :p";
} catch (PDOException $e) {
    echo $e->getMessage();
}


