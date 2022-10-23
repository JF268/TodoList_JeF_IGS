<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/ToDoList_JF_IGS/index.php">
            <i class="fa-solid fa-cat cat-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Crear una cuenta en JeFTodoList
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <!-- correo electrónico-->
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <!-- input de contraseña -->
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <!-- input de  confirmación de contraseña -->
            <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
            <div class="box-eye">
                <!--mediante la función onclick llamamos a la función creada en asset/js/main.js-->
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña'] : "" ?>" class="form-control" id="password2">
        </div>
        <!-- sentencia php, verifica si las contraseñas o algun campo se encuentra vacio, mandar la variable error-->
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        ¿Ya tienes cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesion</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/footer.php");
?>