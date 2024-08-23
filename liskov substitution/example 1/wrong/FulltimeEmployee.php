<?php

class FullTimeEmployee extends Employee
{
    private string $department;

    public function __construct(int $workedHours, string $department)
    {
        parent::__construct($workedHours);
        $this->department = $department;
    }

    public function salary(): float
    {
        return $this->workedHours * 15;
    }
}
