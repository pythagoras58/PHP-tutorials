<?php

    class Database
    {
        private $dsn = "mysql:host=localhost;dbname=ajax_oop";

        private $user = "root";

        private $password = "";

        public $conn;

        public function __construct(){
            try {
                $this->conn = new PDO($this->dsn, $this->user, $this->password);
                
            } catch (PDOException $th) {
                exit('Exit: ' . $th->getMessage());
            }
        }


        public function insertData($firstName, $lastName, $email, $phone){
            $sql = "INSERT into users(first_name, last_name, email, phone) VALUES(:firstName,:lastName,:email,:phone)";
            
        }
    }



   
    

?>