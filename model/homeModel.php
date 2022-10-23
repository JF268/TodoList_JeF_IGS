
<!-- creaciión de una clase que incluirá una función para poder hacer la insercion de usuarios y conectar a la base de datos --->
<?php
    class homeModel{
        private $PDO;
        public function __construct()
        {
            //llamamos a la base de datos
            require_once("c://xampp/htdocs/ToDoList_JF_IGS/config/db.php");
            //  instanciamos un objeto de la clase db
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function agregarNuevoUsuario($correo,$password){
            // preparamos la consulta para insertar un usuario
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo, :password)");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function obtenerclave($correo){
            $statement = $this->PDO->prepare("SELECT password FROM usuarios WHERE correo = :correo");
            $statement->bindParam(":correo",$correo);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
    }

?>