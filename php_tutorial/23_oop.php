<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>This is Oops Tutorial</h1>
    <h2>What is Oops?</h2>
    <p>OOPs is about creating classes and objects. Class serves as a template and multiple objects can be created using a class</p>

    <h2>What are Classes and Objects</h2>
    <p>Classes are templates for creating objects</p>
    <p>If car is a class then maruti suzuki alto and maruti Swift are two objects</p>
    
    <h2>Why OOPs</h2>
    <p>OOPs makes it easy to keep the code DRY? </p>
    <p>DRY - Do not repeat yourself - the code written by the programmer should be reusable</p> 

    <?php 
        class Player {
            // Properties
            public $name;
            public $speed = 5;
            public $running = false;
            
            //Methods
            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
            function run() {
                $this->running = true;
            }
            function stopRun() {
                $this->running = false;
            }
        }

        echo "Lets understand OOPs using GTA Vice City<br>";
        $player1 = new Player();
        $player1->set_name("Tomy");
        echo $player1->get_name();
    ?>

</body>
</html>