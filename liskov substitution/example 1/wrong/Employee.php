<?php

class Employee
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
