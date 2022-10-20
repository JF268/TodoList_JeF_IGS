
<!--- en aqui construiremos una clases con funciones para poder limpiar los campos cuando se introduzcan los datos -->
<?php 
    class homeController{
        private $MODEL;
        public function __contruct(){
            require_once("ToDoList_JF_IGS/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        public function guardarUsuario($nombre,$correo,$contraseña){
            //echo $correo;
             // imprimiendo la función de encriptación de contraseña
            //echo $this->encriptarContraseña($contraseña);
            //echo $this->escriptarContraseña($contraseña);
            die();
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarNombre($nombre),$this->limpiarCorreo($correo),$this->encriptarContraseña($this->limpiarCadena($contraseña)));
            return $valor;
        }
        public function limpiarCadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function limpiarCorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function limpiarNombre($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        // aqui tenemos una funcion para poder encriptar la contraseña y no se visualize en mysql 
        // asi generamos la etica al desarrollar software y la confidencialidad
        public function encriptarContraseña($contraseña){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }
    }
?>