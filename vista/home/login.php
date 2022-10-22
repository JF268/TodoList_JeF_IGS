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
        Inicia sesión en JeFTodoList
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!---div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <!-- contraseña --->
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <!-- intrucción php para accerder mediante metodo get a la variable error que almacena datos-->
        <?php if(!empty($_GET['error'])):?>
            <div id="alerta" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error'])? $_GET['error']:"" ?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">!INICIAR!</button>
        </div>
    </form>
    <div class="col-3 login mt-3">
        ¡Registrate! <a href="registrar.php" style="text-decoration:none">Crea una cuenta</a>
    </div>
</div>


<?php
    //Vamos a enlazar el archivo footer
    require_once("C://xampp/htdocs/ToDoList_JF_IGS/vista/head/footer.php");
?>