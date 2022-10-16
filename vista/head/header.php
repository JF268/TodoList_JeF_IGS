<?php
     require_once("C://xampp/htdocs/ToDoList_JF_IGS/vista/head/head.php");
?>

<div class="fondo_menu">
  <div class="container-fluid">
      <!-- Modidico la clase nav bar de Boostrap para cambiar color a gusto y configuramos botones para el navbar  -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-cadetblue">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Mis tareas</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Mi perfil</a>
              </li>
            </ul>
            <!--Crearemos dos botones para el login de usuario y para registrar uno nuevo -->
            <a href="/ToDoList_JF_IGS/vista/home/login.php" class="boton">Iniciar Sesion</a>
            <a href="/ToDoList_JF_IGS/vista/home/registrar.php" class="boton">¿No tienes cuenta? !Registrate!</a>
          </div>
        </div>
      </nav>
    </div>
  </div>

<div class="fondo">

