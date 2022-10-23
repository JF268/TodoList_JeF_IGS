<?php
    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once("c://xampp/htdocs/ToDoList_JF_IGS/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        //función 
        public function guardarUsuario($correo,$contraseña){
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarcorreo($correo),$this->encriptarcontraseña($this->limpiarcadena($contraseña)));
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
        // uso de la función hash de php para encriptar contraseñas 
        public function encriptarcontraseña($contraseña){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }
        //pasando el correo y contraseña verificamos si existe un usuario para validar el ingreso
        public function verificarusuario($correo,$contraseña){
            $keydb = $this->MODEL->obtenerclave($correo);
            return (password_verify($contraseña,$keydb)) ? true : false;
        }
    }
?>