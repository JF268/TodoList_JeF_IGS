<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/head.php");
    
?>

<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php if(empty($_SESSION['usuario'])): // si la sesión se encuentra vacia, visualizaremos el apartado sin logearse ?>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Mi información</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Conoce esta app</a>
                        </li>
                    </ul>
                    <a href="/ToDoList_JF_IGS/view/home/login.php" class="boton">Iniciar Sesión</a>
                    <a href="/ToDoList_JF_IGS/view/home/signup.php" class="boton">Registrate!</a>
                </div>
                <?php else: // de ser el caso contrario, si existe un usuario logeado, tendremos la otra vista del header con usuario ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Agregar informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar mis tareas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">¿Como optimizar mis tareas?</a>
                        </li>
                    </ul>
                    <a href="/ToDoList_JF_IGS/view/home/logout.php" class="boton">Cerrar Sesión</a>
                </div>
                <?php endif ?>
            </div>
        </nav>
    </div>
</div>
<div class="fondo">

