<?php 
    class Employee {
        // Properties
        public $name;
        public $salary;

        //methods
        // function __construct()
        // {
        //     echo "This is a constructor without arguments<br>";
        // }
        function __construct($name, $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }

        function __destruct()
        {
            echo "I am destructing $this->name <br>";
        }
    }
    $dipe = new Employee("Dipe", 70000);
    $tanvir = new Employee("Tanvir", 80000);
    $mahamood = new Employee("Mahamood", 90000);
    
    echo "The salary of dipe is $dipe->salary <br>";
    echo "The salary of tanvir is $tanvir->salary <br>";
    echo "The salary of mahamood is $mahamood->salary <br>";
?>