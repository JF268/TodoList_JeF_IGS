<?php
    class db{
        //atributos de la conexión a la base de datos
        private $host="localhost";
        private $dbname="practica1";
        private $user="root";
        private $password="";
        // creaamos una función que contenga estos atributos para ser invocada posteriormente
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