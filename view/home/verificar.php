<?php
    // trabajando con sesiones
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $correo = $obj->limpiarcorreo($_POST['correo']);
    $contraseña = $obj->limpiarcadena($_POST['contraseña']);
    $advertencia = $obj->verificarusuario($correo,$contraseña);
    if($advertencia = true){
        $_SESSION['usuario'] = $correo;
        header("Location:/ToDoList_JF_IGS/view/home/panel_control.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>