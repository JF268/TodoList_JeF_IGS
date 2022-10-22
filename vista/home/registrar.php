<?php
    //Vamos a enlazar el archivo head.php
    require_once("C://xampp/htdocs/ToDoList_JF_IGS/vista/head/head.php");
    // si se tiene un usuario activo, no se permitira redirigir a otro lado
    if(!empty($_SESSION['usuario'])){
        //mandar al panel.php (listado de tareas)
        header("Location:panel.php") ;
    }
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
            <!--- correo-electrónico -->
            <input type="email" name="correo" value="<?=(!empty($_GET['correo']))? $_GET['correo']:"" ?>" class="form-control" placeholder="correo@example.com" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <!-- nombre--->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
            <!--- name -->
            <input type="text" name="nombre" value="<?=(!empty($_GET['nombre']))? $_GET['nombre']:"" ?>" class="form-control" placeholder="Escriba su nombre completo" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <!--- contraseña --->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <!-- boton para ejecutar la instruccion en el archivo JS para visualizar la contraseña -->
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <!--- entrada para contraseña ---->
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <div class="mb-3">
        <!--- repetir contraseña --->
            <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>

            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <!--- repetir contraseña ---->
            <input type="password" name="confirmarContraseña" class="form-control" id="password2">
        </div>
        <!-- apartado para mandar mensaje de error en el archivo store con sentencia if en php--->
        <?php if(!empty($_GET['error'])):?>
            <div id="alerta" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error'])? $_GET['error']:"" ?>
            </div>
        <?php endif;?>
        
        <div class="d-grid gap-2">
            <!--- boton submit---->
            <button type="submit" name="submit" class="btn btn-primary">CREAR CUENTA</button>
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