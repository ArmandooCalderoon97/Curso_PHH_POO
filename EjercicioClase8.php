<?php

error_reporting(-1);

class BDStatic{

    protected static $db_user = 'ReoNa';
    protected static $db_password = 'Anima';
    protected static $db_database_name = 'PHP_Reona_BD';

    protected static function connect(){

        echo "Conectando con : ". self::$db_user . ":" . self::$db_password . ":" . self::$db_database_name;

    }
}

class BaseProfile extends BDStatic{
    
    //protected $connection_data = 'Conexion BD';
    protected function connect2DB(){

        echo $this->connection_data;
    }

    public function __contrusct(){

        //$this->connect2DB();
        self::connect();
    }
}

class MyProfile extends BaseProfile{

    private $email = 'ReoNa@correo.com';
    public $name;
    public $last_name;

    /*
    public function __construct(){

        $this->connect2DB();
    }
    */

    public function getEmail(){

        return $this->email;
    }

    public function setEmail($email){

        $this->email = $email;
    }

    public function message(){

        echo "mensaje";
    }


}

/*
echo DBStatic::$db_user;
echo"\n";
echo DBStatic::$db_password;
echo"\n";
echo DBStatic::$db_database_name;
echo"\n";
DBStatic::connect();
*/

//$insMyProfile = new MyProfile;
MyProfile::message();


?>