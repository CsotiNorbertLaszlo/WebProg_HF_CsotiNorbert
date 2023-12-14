<?php

require_once "Student.php";
require_once "Subject.php";
require_once "University.php";


$stud1 = new Student("Fikusz", "333");
$stud2 = new Student("Kukisz", "222");
$stud3 = new Student("Fortissimo", "111");

$subj1 = new Subject("1001", "PHP");
$subj2 = new Subject("1002", "JAVA");
$subj3 = new Subject("1003", "VBA");


$subj1->addStudent($stud1->getName(), $stud1->getStudentNumber());
$subj1->addStudent($stud2->getName(), $stud2->getStudentNumber());
$subj2->addStudent($stud1->getName(), $stud1->getStudentNumber());
$subj2->addStudent($stud2->getName(), $stud2->getStudentNumber());


//foreach ($subj1->getStudents() as $item) {
//
//    echo $item;
//}

$uni1 = new University([$subj1, $subj2]);

$uni1->addStudentOnSubject($subj1->getCode(), $stud1);
$uni1->addStudentOnSubject($subj1->getCode(), $stud2);

//foreach ($subj2->getStudents() as $item) {
//    echo $item;
//}
//foreach ($subj1->getStudents() as $item) {
//    echo $item;
//}


$uni1->addStudentOnSubject($subj1->getCode(), $stud1);
$uni1->addStudentOnSubject($subj2->getCode(), $stud2);


//foreach ($subj2->getStudents() as $item) {
//    echo $item . "hehe" . "\n";
//}
//$uni1->print();


//echo '-*-*-*-*-*' ."\n";
//
//foreach ($subj1->getStudents() as $item) {
//    echo $item;
//}
//
//echo '-*-*-*-*-*' . "\n";

//$subj1->deleteStudent($stud1);
//$subj1->deleteStudent($stud2);
//$subj1->deleteStudent($stud4);
//
//foreach ($subj1->getStudents() as $item) {
//    echo $item;
//}
//
//$uni1->deleteSubject($subj1);
//$uni1->deleteSubject($subj2);

$stud1->addGrade($subj1, 10);
$stud1->addGrade($subj2, 9);

$stud1->printGrades();

$stud2->addGrade($subj1, 3);
$stud2->addGrade($subj2, 5);

$stud2->printGrades();

$stud3->addGrade($subj1, 6);
$stud3->addGrade($subj2, 5);

$stud3->printGrades();


//foreach ($subj1->getStudents() as $item) {
//    echo $item;
//}


$students = [$stud1, $stud2, $stud3];


usort($students, array($stud1, 'getAvgGrade'));


foreach ($students as $student) {
    echo $student->getAvgGrade() . "\n";
}
