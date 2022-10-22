
<?php
// trabajando con sesiones
     session_start();
     require_once("c://xampp/htdocs/ToDoList_JF_IGS/controlador/homeController.php");
     $obj = new homeController();  // validación de la existencia de un usuario accediendo a las funciones de homeController
     $correo = $obj->limpiarcorreo($_POST['correo']);
     $contraseña = $obj->limpiarcadena($_POST['contraseña']);
     $bandera = $obj->verificarusuario($correo, $contraseña);
     if($bandera = true){ // si se verifica el usuario , inicia sesion
        $_SESSION['usuario'] = $correo;
        header("Location:panel.php");
     } else { // mandaremos el error en el archivo php en el login
        $error = "<li> Las claves son incorrectas </li>";
        header("Location:login.php?error=".$error);
     }

?>