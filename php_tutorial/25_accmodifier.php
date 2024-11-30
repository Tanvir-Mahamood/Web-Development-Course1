<?php
    // Acess Modifier
    class Employee {
        var $name;
        public $dept;
        private $salary = "70000";

        function __construct($name, $dept)
        {
            $this->name = $name;
            $this->dept = $dept;
        }

        function showSalary() { // functions are by default public
            echo "$this->salary";
        }
    }
    $tanvir = new Employee("Tanvir", "CSE");
    echo $tanvir->name; echo "<br>";
    echo $tanvir->dept; echo "<br>";
    //echo $tanvir->salary; echo "<br>";
    echo $tanvir->showSalary(); echo "<br>";
?>