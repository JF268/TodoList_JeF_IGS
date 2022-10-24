<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/head.php");
    // comprobamos si en la variable sesion no se encuentra "vacia" entonces mandamos al login para acceder
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/ToDoList_JF_IGS/index.php">
            <i class="fa-solid fa-shield-cat cat-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Inicia sesion en JeFTodoList
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <!-- input de email para iniciar sesión -->
            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" style="font-family: 'Acme', sans-serif">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <!-- input de contraseña -->
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-danger">¡Acceder!</button>
        </div>
    </form>
    <div class="login col-3 mt-3" style="font-family: 'Acme', sans-serif">
        ¿No tienes cuenta? <a href="signup.php" style="text-decoration: none; color:red">Crea una cuenta</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/head/footer.php");
?>