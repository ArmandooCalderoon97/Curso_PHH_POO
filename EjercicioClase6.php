<?php

class MyProfile{

    private $email = "ReoNa@correo.com";
    public $name;
    public $last_name;

    public function __construct(){

    }

    public function getEmail(){

        return $this->email;
    }

    public function setEmail($email){

        $this->email = $email;
    }

    private function getDetails(){


    }

}

$instMyProfile = new MyProfile;

//$instMyProfile->email = "Roberto";

echo $instMyProfile->getEmail();

?>