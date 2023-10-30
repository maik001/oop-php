<?php
namespace App;

class Student
{
    /**
     *  O Id para o estudante
     */
    private $id;
    private $name, $result, $remark, $grade, $average, $total;
    private $sub1, $sub2, $sub3, $sub4, $sub5;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setMarks(
        float $sub1,
        float $sub2,
        float $sub3,
        float $sub4,
        float $sub5)
    {
        $this->sub1 = $sub1;
        $this->sub2 = $sub2;
        $this->sub3 = $sub3;
        $this->sub4 = $sub4;
        $this->sub5 = $sub5;
    }

    public function totalScore(): float
    {
        return $this->total = $this->sub1 + $this->sub2 + $this->sub3 + $this->sub4 + $this->sub5;
    }

    public function averageScore(): float
    {
        return $this->average = $this->total / 5;
    }

    public function grade(): string
    {
        if ($this->average > 70 && $this->average <= 100) return $this->grade = 'A';
        if ($this->average > 60 && $this->average <= 69.9) return $this->grade = 'B';
        if ($this->average > 50 && $this->average <= 59.9) return $this->grade = 'C';
        if ($this->average > 40 && $this->average <= 49.9) return $this->grade = 'D';
        if ($this->average > 0 && $this->average <= 39.9) return $this->grade = 'F';

        return $this->grade = 'unknown';
    }

    public function remark(): string
    {
        switch($this->grade) {
            case 'A':
                $this->remark = 'Excellent';
                break;
            case 'B':
                $this->remark = 'Very Good';
                break;
            case 'C':
                $this->remark = 'Good';
                break;
            case 'D':
                $this->remark = 'Fair';
                break;
            case 'F':
                $this->remark = 'Poor';
                break;
            default:
                $this->remark = 'Very Poor';
        }

        return $this->remark;
    }

    public function finalResult(): string
    {
        if($this->sub1 < 40 || $this->sub2 < 40 || $this->sub3 < 40 
            || $this->sub4 < 40 || $this->sub5 < 40) {
            $this->result = 'Fail';
        } else {
            $this->result = 'Pass';
        }

        return $this->result;
    }
}