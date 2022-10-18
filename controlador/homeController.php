<?php 
    class homeController{
        private $MODEL;
        public function __contruct(){
            require_once("C://xampp/htdocs/ToDoList_JF_IGS/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        public function guardarUsuario($correo,$contraseña){
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarCorreo($correo),$this->encriptarContraseña($this->limpiarCadena($contraseña)));
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
        public function encriptarContraseña(){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }
    }

?>