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
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'firstName'=>$firstName,
                'lastName'=>$lastName,
                'email'=>$email,
                'phone'=>$phone
            ]);


            return true;
        }

        public function readData(){
            $data =  array();
            $sql = "SELECT * FROM users";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
                $data[] = $row; 
            }

            return $data;
        }


        public function getUserById($id){
            $sql = "SELECT * FROM users WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        }

        public function updateUser($id, $firstName, $lastName, $email, $phone){
            $sql = "UPDATE users SET first_name=:firstName, last_name=:lastName, email=:email, phone=:phone WHERE id=:id";

            $stmt= $this->conn->prepare($sql);
            $stmt->execute([
                'firstName'=>$firstName,
                'lastName'=>$lastName,
                'email'=>$email,
                'phone'=>$phone,
                'id'=>$id
            ]);

            return true;
        }


        public function deleteUser($id){
            $sql = "DELETE FROM users WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);

            return true;
            
        }

        public function totalRowCount(){
            $sql = "SELECT * from users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $total = $stmt->rowCount();

            return $total;
        }
    }



   
    

?>