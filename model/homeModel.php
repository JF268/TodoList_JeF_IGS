
<!-- En aqui crearemos una clase que incluirá una función para poder hacer la insercion de usuarios y conectar a la base de datos --->
<?php
    class homeModel{
        private $PDO;
        public function __construct()
        {
            //creamos un objeto para de la conexión que viene desde el archivo de conexión
            require_once("C://xampp/htdocs/ToDoList_JF_IGS/config/conec_bd.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function agregarNuevoUsuario($correo,$nombre,$password){
            $statement = $this->PDO->prepare("INSERT INTO users values(null,:correo,:nombres,:password)");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":nombres",$nombre);
            $statement->bindParam(":password",$password);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        //funcion para obtener clave
        public function obtenerclave($correo){
            $statement = $this->PDO->prepare("SELECT password FROM users WHERE correo = :correo");
            $statement->bindParam(":correo",$correo);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
    }

?>