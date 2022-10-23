<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/controller/homeController.php");
    // instanciamos un objeto del archivo homeController
    $obj = new homeController();
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];
    $error = "";
    // si los campos estan vacíos mandamos a que el usuario vuelva a completarlos
    if(empty($correo) || empty($contraseña) || empty($confirmarContraseña)){
        $error .= "<li>Completa los campos</li>";
        header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
         // en caso de que contengan campos, verificar si las contraseñas son iguales
    }else if($correo && $contraseña && $confirmarContraseña){
        if($contraseña == $confirmarContraseña){ // de ser iguales, se accede a la funcion guardarUsuario del homeController
            if($obj->guardarUsuario($correo,$contraseña) == false){
                $error .= "<li>El correo ya esta registrado</li>";
                header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
            }else{
                header("Location:login.php");
            }
        }else{ // si no se cumple que las contraseñas conincidan enviar desde la variable $error a registrar
            $error .= "<li>Las contraseñas son diferentes</li>";
            header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        }
    }
?>