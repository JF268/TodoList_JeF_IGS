<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/controlador/homeController.php");
    $obj = new homeController();
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];
    $error = "";
    // si los campos estan vacíos mandamos a que el usuario vuelva a completarlos
    if(empty($correo) || empty($contraseña) || empty($confirmarContraseña)){
        $error .= "<li>Completa los campos</li>";
        header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        // en caso de que contengan campos, verificar si las contraseñas son iguales
    }else if($correo && $contraseña && $confirmarContraseña){
        if($contraseña == $confirmarContraseña){   // si se cumple, accedemos a la función para guardarUsuario 
            if($obj->guardarUsuario($correo,$nombre,$contraseña) == false){ 
                $error .= "<li>El correo ya esta registrado</li>";
                header("Location:registrar.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
            }else{
                header("Location:login.php");
            }
        }else{
            $error .= "<li>Las contraseñas son diferentes</li>";
            header("Location:registrar.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        }
    }
?>