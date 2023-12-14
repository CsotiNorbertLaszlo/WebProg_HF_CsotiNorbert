<?php

class Subject
{
    private string $code;
    private string $name;
    private array $students = [];

    public function __construct(string $code, string $name, array $students = [])
    {
        $this->code = $code;
        $this->name = $name;
        $this->students = $students;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function setStudents(array $students): void
    {
        $this->students = $students;
    }

    public function addStudent(string $name, string $studentNumber): string
    {
        try {
            if ($this->isStudentExists($studentNumber)) {
                return new Student($name, $studentNumber);
            } else {
                $student = new Student($name, $studentNumber);
                $this->students[] = $student;
                return $student;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteStudent(Student $student): string
    {
        try {
            $studentNumber = $student->getStudentNumber();

            $found = false;
            foreach ($this->getStudents() as $key => $item) {
                if ($item->getStudentNumber() === $studentNumber) {
                    unset($this->students[$key]);
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                throw new Exception('Ilyen diák nincs :(');
            }

            return 'Dák törlésre került';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private function isStudentExists(string $studentNumber): bool
    {
        foreach ($this->students as $item) {
            if ($item->getStudentNumber() === $studentNumber) {
                return true;
            }
        }
        return false;
    }

    public function __toString(): string
    {
        return $this->getCode() . "  " . $this->name . "\n";
    }
}