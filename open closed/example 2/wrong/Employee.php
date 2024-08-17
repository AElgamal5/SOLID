<?php

class Employee
{
    public string $name;
    public string $start_date;
    public string $type;

    public function getSalaryAttributes()
    {
        $salary = 0;

        $years = now()->diffInYears($this->start_date);

        switch ($this->type) {
            case 'director':
                $salary = 5000 + $years * 5000;
                break;
            case 'developer':
                $salary = 4000 + $years * 4000;
                break;
            case 'designer':
                $salary = 4500 + $years * 4500;
                break;
            case 'support':
                $salary = 3000 + $years * 3000;
                break;
        }

        return $salary;
    }
}