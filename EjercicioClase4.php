<?php

class Pet{

    public $name = 'Ringo';
}

class Person{

    public $age;
    public $name;
    private $money_in_wallet;
    private $todos;
    private $married;

    public function run(){
        
        echo ' Estoy corriendo ';
    }

    public function walk(){

        echo ' Estoy caminando ';
    }

    public function greet( Person $other_person ){

        echo "Hola, ". $other_person->name;
    }

    public function __construct($name){

        $this->name = $name;
    }

    public function adopt(Pet $instance_pey){

        echo 'Porfavor, adopte a '. $instance_pey->name;
    }

}

$person1 = new Person('Bryan');
$person2 = new Person('Fernando');
$pet = new Pet();

$person1->greet($person2);
$person1->adopt($pet);


?>