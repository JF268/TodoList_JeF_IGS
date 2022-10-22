<?php
    class db{

        //variables para hacer la conexión con mysql
        private $host="localhost";
        private $dbname="db_prueba";
        private $user="root";
        private $password="";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>