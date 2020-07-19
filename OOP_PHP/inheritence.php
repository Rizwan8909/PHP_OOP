<?php
    class Employee {
        private $name = "Employee";
        private $salary = 10000;

        function __construct($name, $sal)
        {
            $this->name = $name;
            $this->salary = $sal;
            $this->describe();
        }

        function describe(){
           echo  "Employee name = ". $this->name . "<br>";
           echo  "Employee name = ". $this->salary . "<br>";
        }
    }

    class Programmer extends Employee{
        private $lang = "PHP";

        function showLang($language){
            $this->lang = $language;
            echo "Programming language = ".$this->lang;
        }
    }


    $rizwan = new Employee("Rizwan", 100000);
    $rehan = new Programmer("rehan", 10000);
    $rehan->showLang("PYTHIN");
?>