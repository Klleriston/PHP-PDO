<?php
use Alura\Pdo\Domain\Model\Student;

require_once '../../../../vendor/autoload.php';

$databasePath = __DIR__ . "/../Database.sqlite";
$pdo = new PDO('sqlite:' . $databasePath);

try {
    $statment = $pdo->query('SELECT * FROM students;');
    $studentArray = $statment->fetch(PDO::FETCH_ASSOC);
   var_dump($studentArray); exit ();
    $studentList = [];

    foreach ($studentArray as $student) {
        $studentList = new Student(
            $student['id'],
            $student['name'],
            new DateTimeImmutable($student['birth_date'])
        );
    }

    var_dump($studentList);

} catch (PDOException $e) {
    echo $e->getMessage();
}

