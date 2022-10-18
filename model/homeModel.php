
<!-- En aqui crearemos una clase que incluirá una función para poder hacer la insercion de usuarios y conectar a la base de datos --->
<?php 
    class homeModel{
        private $PDO;
        public function __contruc(){
            require_once("C://xampp/htdocs/ToDoList_JF_IGS/config/conec_bd.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function agregarUsuario($correo,$password){
            $statement = $this->PDO->prepare("INSERT INTO tusuarios values(null,:correo, :password)");
            $statement -> bindParam(":correo",$correo);
            $statement -> bindParam(":correo",$correo);
        } 
    }
?>