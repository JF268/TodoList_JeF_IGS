
<?php
    //apartado visual cuando el usuario ingrese por el login
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/header.php");
    //comprobamos si hay una sesión vacia, entonces nos direcciona nuevamente al login
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }

?>
 
    <h1 class="text-rigth mt-4 prin"> ¡Hola! <?= $_SESSION['usuario']?> Aqui están tus tareas</h1>

    <div class="container">
            <form method="post">
                <div class="login col-3 mt-3" style="font-family: 'Acme', sans-serif">
                    ¿No tienes tareas? <a href="/ToDoList_JF_IGS/view/crud/vistauser.php" style="text-decoration: none; color:red">ADMINISTRAR TAREAS</a>
                </div>
            </form>
    </div>

<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/footer.php");
?>