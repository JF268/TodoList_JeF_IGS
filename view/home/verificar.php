<?php
    // trabajando con sesiones
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $correo = $obj->limpiarcorreo($_POST['correo']);
    $contraseña = $obj->limpiarcadena($_POST['contraseña']);
    $bandera = $obj->verificarusuario($correo,$contraseña);
    if($bandera){
        $_SESSION['usuario'] = $correo;
        header("Location:panel_control.php");
    }else{ // mandaremos el error en el archivo php en el login
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>