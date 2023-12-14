<?php

use HF5\University\ThereAreStillStudentsException;


require_once "ThereAreStillStudentsException.php";
require_once "AbstractUniversity.php";


class University extends AbstractUniversity
{
    public $subjects = [];


    /**
     * @param array $subjects
     */
    public function __construct(array $subjects = [])
    {
        $this->subjects = $subjects;
    }

    public function addSubject(string $code, string $name): Subject
    {
        foreach ($this->subjects as $item) {
            if ($this->isSubjectExists($code)) {
                return $item;
            } else {
                $subject = new Subject($code, $name);
                $this->subjects[] = $subject;

            }
        }

        return $subject;
    }

    function deleteSubject(Subject $subject): void
    {
        try {
            if (count($subject->getStudents()) > 0) {
                throw new ThereAreStillStudentsException("There are still students in this subject" . "\n");
            }
            if ($this->isSubjectExists($subject->getCode())) {
                foreach ($this->subjects as $key => $item) {
                    if ($item->getCode() === $subject->getCode()) {
                        unset($this->subjects[$key]);
                        echo "Subject deleted" . "\n";
                    }
                }

            } else {
                echo "Subject not found" . "\n";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }

    function isSubjectExists($code): bool
    {
        foreach ($this->subjects as $item) {
            if ($item->getCode() === $code) {
                return true;
            }
        }
        return false;

    }

    public function addStudentOnSubject(string $subjectCode, Student $student): void
    {
        foreach ($this->subjects as $item) {
            if ($item->getCode() === $subjectCode) {
                $item->addStudent($student->getName(), $student->getStudentNumber());
            }
        }

    }

    public function getStudentsForSubject(string $subjectCode)
    {
        foreach ($this->subjects as $subject) {
            if ($subject->getCode() === $subjectCode) {
                return $subject->getStudents();
            }

        }

    }

    public function getNumberOfStudents(): int
    {
        $sum = 0;

        foreach ($this->subjects as $subject) {
            $sum += count($subject->getStudents());
        }

        return $sum . " ";
    }

    public function print(): void
    {
        foreach ($this->subjects as $subject) {
            echo '----------------------' . "\n";
            echo $subject . "\n";
            foreach ($subject->getStudents() as $student) {
                echo $student . "\n";
            }
            echo '----------------------' . "\n";

        }


    }


}