<?php
    class Employee{
        public $name;
        public $salary;
        // Always run without calling whenever an object is created or instantiated
        function __construct($Emp_name, $Emp_salary)
        {
            $this->name = $Emp_name;
            $this->salary = $Emp_salary;
        }
    }

    $Rizwan = new Employee("Rizwan", 100000);
    echo "Salary of ".$Rizwan->name." is ".$Rizwan->salary."";
    echo "<br>";

    $rehan = new Employee("Rehan", 10000);
    echo "Salary of ".$rehan->name." is ".$rehan->salary."";
    echo "<br>";
?>