<?php

class Person{

    public $age;
    public $name;

    public function run(){

        echo 'Estoy Corriendo';
    }

    public function walk(){

        echo 'Estoy Caminando';
    }

    public function greet( $other_person_name ){

        echo $this->name . ' Saluda a '.$other_person_name;
    }
}

for( $i = 0; $i < 5; $i++ ){

    //$person = new Person();
}

$person = new Person();
$person->run();
$person->walk();
$person->greet('Armando');

?>