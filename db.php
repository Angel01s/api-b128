<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'us-cdbr-east-06.cleardb.net';
        $this->db       = 'heroku_f06ce9fb0f4d68b';
        $this->user     = 'b97c8e31e12936';
        $this->password = "53886d91";
        //$this->password = "6#vWHD_$";
        $this->charset  = 'utf8';
    }

    //mysql -e "USE todolistdb; select*from todolist" --user=azure --password=6#vWHD_$ --port=49175 --bind-address=52.176.6.0

    function connect(){
    
        try{

            
            $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            //$pdo = new PDO($connection, $this->user, $this->password, $options);
            $pdo = new PDO($connection,$this->user,$this->password);
            
            return $pdo;


        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
    
}
?>