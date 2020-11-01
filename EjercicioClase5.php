<?php

class Animal{

    public $sound_type = 'Emito un sonido';
    public function run(){

        echo 'Yo corro';
    }

    public function walk(){

        echo 'Yo camino';
    }

    public function __construct(){

        echo 'Nacio un animal';
    }

    public function getSound(){

        echo 'Yo'. $this->sound_type;
    }

}

Class Dog extends Animal{

    public $sound_type = 'Ladro';
    public function __construct(){

        parent::__construct();
        echo 'Nacio un cachorro';
    }

}

CLass Cat extends Animal{

    public $sound_type = 'Maullo';
    public function __construct(){

        parent::__construct();
        echo 'Nacio un gatito';
    }

}

$dog = new Dog();
$dog->run();
$dog->getSound();
echo "\n";
$cat = new Cat();
$cat->run();
$cat->getSound();

if( $dog instanceof Dog){

    echo 'Es un perro';
}

if( $dog instanceof Animal){

    echo 'Es un animal';
}


?>