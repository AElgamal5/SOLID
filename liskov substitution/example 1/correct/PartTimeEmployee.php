<?php

class PartTimeEmployee extends Employee implements SalaryCalculator
{
    private string $project;

    public function __construct(int $workedHours, string $project)
    {
        parent::__construct($workedHours);
        $this->project = $project;
    }

    public function salary(): float
    {
        return $this->workedHours * 8;
    }
}
