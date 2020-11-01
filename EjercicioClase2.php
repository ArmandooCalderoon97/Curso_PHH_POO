<?php

class Persona 
{

    public $age;
    public $name;
    public function run(){

        echo 'Estoy corriendo';
    }

    public function __construct($name, $age){

        $this->name = $name;
        $this->age = $age;
    }
}

$persona = new Persona('Armando', 22);

echo $persona->name;

$persona->run();

$persona2 = new Persona('RenGoku', 20);

echo "\n";
echo $person2->name;
$person2->run();

?>