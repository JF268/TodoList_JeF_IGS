
<!--- en aqui construiremos una clases con funciones para poder limpiar los campos cuando se introduzcan los datos -->
<?php
    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once("C://xampp/htdocs/ToDoList_JF_IGS/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        // pasando los parametros para guardar un usuario
        public function guardarUsuario($correo,$nombre,$contraseña){
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarcorreo($correo),$this->limpiarcadena($nombre),$this->encriptarcontraseña($this->limpiarcadena($contraseña)));
            return $valor;
        }
        public function limpiarcadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function limpiarcorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        //función para encriptar la contraseña
        public function encriptarcontraseña($contraseña){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }
        //pasando el correo y contraseña verificamos si existe
        public function verificarusuario($correo,$contraseña){
            $keydb = $this->MODEL->obtenerclave($correo);
            return (password_verify($contraseña,$keydb)) ? true : false;
        }
    }
?>