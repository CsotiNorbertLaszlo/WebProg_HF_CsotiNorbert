<?php
class Student
{
    private string $name;
    private string $studentNumber;
    private array $grades = [];

    /**
     * @param string $name
     * @param string $studentNumber
     */
    public function __construct(string $name, string $studentNumber)
    {
        $this->name = $name;
        $this->studentNumber = $studentNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStudentNumber(): string
    {
        return $this->studentNumber;
    }

    public function setStudentNumber(string $studentNumber): void
    {
        $this->studentNumber = $studentNumber;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function setGrades(array $grades): void
    {
        $this->grades = $grades;
    }


    public function addGrade(Subject $subject, int $grade): void
    {

        try {

            $grades = $this->getGrades();
            $grades[$subject->getName()] = $grade;
            $this->setGrades($grades);


        } catch (Exception $e) {
            echo $e->getMessage();


        }


    }

    public function printGrades(): void
    {
        foreach ($this->getGrades() as $key => $grade) {
            echo $this->getName() . " : " . $key . " - " . $grade . "\n";
        }
    }

    public function getAvgGrade(): float
    {
        $sum = 0;
        foreach ($this->getGrades() as $grade) {
            $sum += $grade;
        }
        return $sum / count($this->getGrades());

    }



    public function __toString(): string
    {
        return $this->name . " - " . $this->studentNumber . "\n";

    }

}