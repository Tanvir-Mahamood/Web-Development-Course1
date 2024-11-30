<?php
    class Employee {
        public $name = "dipe";
        private $salary = 1000;
        private $grade = 3;

        function setSalary($salary) {
            $this->salary += $salary;
        }

        function getSalary() {
            echo "The salary of the employee is $this->salary .<br>";
        }

        function showName() {
            echo "The name of the employee is $this->name .<br>";
        }
    }

    class Programmer extends Employee {
        private $language = "PHP";
        function changeLanguage($lang) {
            $this->language = $lang;
        }
    }

    $tanvir = new Employee();
    $tanvir->name = "Tanvir";
    $tanvir->showName();
    $tanvir->setSalary(100);
    $tanvir->getSalary();

    $dipe = new Employee();
    $dipe->name = "Dipe";
    $dipe->showName();
    $dipe->setSalary(200);
    $dipe->getSalary();

    $shadhana = new Programmer();
    echo $shadhana->changeLanguage("python");
    $shadhana->name = "Shadhana Rani";
    $shadhana->showName();
    $shadhana->getSalary();
?>