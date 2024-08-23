<?php

class Employee implements SalaryCalculator
{
    protected int $workedHours;

    public function __construct(int $workedHours)
    {
        $this->workedHours = $workedHours;
    }

    public function salary(): float
    {
        return $this->workedHours * 10;
    }
}
