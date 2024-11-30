<?php
    class Employee {
        public $name;
        //public $lang;
        public $salary;

        public function __construct($name, $salary) {
            echo "From parent class constructor<br>";
            $this->name = $name;
            //$this->lang = $lang;
            $this->salary = $salary;
            $this->description();
        }

        protected function description() {
            echo "Name of the employee is $this->name <br>";
            //echo "Language of the employee is $this->lang <br>";
            echo "Salary of the employee is $this->salary <br>";
        }
    }

    class Programmer extends Employee{
        public $lang = "php";
        public function __construct($name, $lang, $salary) {
            echo "From derived class constructor<br>";
            $this->name = $name;
            $this->lang = $lang;
            $this->salary = $salary;
            $this->description();
        }
    }

    $dipe = new Employee("Dipe", 150);
    $shadhana = new Programmer("Shadhana", "JS", 200);
    
?>