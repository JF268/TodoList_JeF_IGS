
<!-- en el archivo panel, accedermos a la información dinamica de cada usuario--->

<?php
    //archivo donde almacenamos el apartado de la vista para el header de la app
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/vista/head/header.php");
    // si la sesion esta vacia, mandar al login
    if(empty($_SESSION['usuario'])){
        //mandar al panel.php (listado de tareas)
        header("Location:login.php") ;
    }

?>
    <h1 class="text-left mt-4" style="color:white" > Bienvenido <?= $_SESSION['usuario']?> </h1>




<?php
    //archivo donde almacenamos el apartado de la vista para el header de la app
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/vista/head/footer.php")


?>