 <?php 
    class db{
        //atributos de conexion a la base de datos (conexion modificada)
        private $host ="localhost";
        private $dbname ="lista_tareas";
        private $user = "root";
        private $password ="";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e -> getMessage();
            }
        }
    }
    //probar la conexiond esde el archivo "conec_bd.php"
    $obj = new db();
    print_r($obj->conexion());

 ?>