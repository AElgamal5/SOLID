<?php

class Employee
{
    public string $name;
    public string $start_date;
    public string $type;

    public function getSalaryAttributes()
    {
        $salary = 0;

        $calculators = [
            "director" => 'PATH/CalculatorDirectorSalary',
            "developer" => 'PATH/CalculatorDeveloperSalary',
            "designer" => 'PATH/CalculatorDesignerSalary',
            "support" => 'PATH/CalculatorSupportSalary',
        ];


        try {
            return (new $calculators[$this->type])->calculate($this->start_date);
        } catch (\Exception $ex) {
            throw new Exception("Not supported employee type");
        }
    }
}