
/* crearemos la funcion para mostrar la contraseña y tambien inviertiendo el icono de boostrap(click)*/
function mostrarContraseña(idPassword, idIcon){
    let inputPassword = document.getElementById(idPassword);
    let icon = document.getElementById(idIcon);
    if(inputPassword.type =="password" && icon.classList.contains("fa-eye")){
        inputPassword.type = "text";
        icon.classList.replace("fa-eye","fa-eye-slash");
    }else{
        inputPassword.type = "password";
        icon.classList.replace("fa-eye-slash","fa-eye");
    }
}