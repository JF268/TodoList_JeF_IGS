<?php
    require_once("C://xampp/htdocs/ToDoList_JF_IGS/controlador/homeController.php");
    $obj = new homeController();
    $correo = $_POST['correo'];
    $named2 = $_POST['named2'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];

    $error ="";
    // estructura de validación mediante sentencia if, verificando si los campos estan vacios
    if(empty($correo) || empty($named2) || empty($contraseña) || empty($confirmarContraseña)){
        $error .= "<li>Completa los campos</li>"; // nos imprime un listado para llenar los campos
        header("Location: registrar.php?error=".$error."&&correo=".$correo."&&named2".$named2."&&contraseña".$contraseña."&&confirmarContraseña".$confirmarContraseña); // propiedad header para redirigirnos al formulario de registro mediante el metodo GET
        // en otro caso si, los campos estan llenos, verificamos las contraseñas
    } else if($correo && $named2 && $contraseña && $confirmarContraseña){
        if($contraseña == $confirmarContraseña){
            // si en este caso funciona entonces guardamos el usuario
            if($obj->guardarUsuario($named2,$correo,$contraseña) == false){
                $error .= "<li> El correo ingresado ya esta registrado.</li>";
                header("Location: registrar.php?error=".$error."&&correo=".$correo."&&named2".$named2."&&contraseña".$contraseña."&&confirmarContraseña".$confirmarContraseña);
            } else {
                header("Location:login.php");
            }
        } else {
            //si las contraseñas no coinciden invoacremos a la variable error para que tome un nuevo mensaje de alerta
            $error .= "<li> Las contraseñas no coinciden</li>";
            header("Location: registrar.php?error=".$error."&&correo=".$correo."&&named2".$named2."&&contraseña".$contraseña."&&confirmarContraseña".$confirmarContraseña);
        }
    }

?>