<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Klleriston Andrade',
    new \DateTimeImmutable('2003-03-05')
);

echo $student->age();
