<?php
    //Vamos a enlazar el archivo head.php
    require_once("C://xampp/htdocs/ToDoList_JF_IGS/vista/head/head.php");
?>

<div class="fondo-login">
    <div class="icono">
        <a href="/ToDoList_JF_IGS/index.php">
        <i class="fa-solid fa-solid fa-cat cat-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Crear una cuenta
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            <input type="email" name="correo" class="form-control" placeholder="correo@example.com" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nombre Completo</label>
            <input type="text"  name="nombre" class="form-control" placeholder="Escriba su nombre completo" id="exampleInputName" aria-label="Username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>

            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" class="form-control" id="password2">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="col-3 login mt-3">
        Si tienes cuenta <a href="login.php" style="text-decoration:none">, Inicia Sesión</a>
    </div>
</div>


<?php
    //Vamos a enlazar el archivo footer
    require_once("C://xampp/htdocs/ToDoList_JF_IGS/vista/head/footer.php");
?>