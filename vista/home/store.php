<?php
    require_once("C://xampp/htdocs/ToDoList_JF_IGS/controlador/homeController.php");
    $obj = new homeController();
    echo $correo = $_POST['correo'];
    echo $contraseña = $_POST['contraseña'];
    echo $confirmarContraseña = $_POST['confirmarContraseña'];
?>