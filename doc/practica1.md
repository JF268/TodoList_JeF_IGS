
PRACTICA DE INGENIERIA DE SOFTWARE 2

ALUMNO: JEAN FRANCO ROMERO CALVO

El presente archivo contiene el desarollo de la aplicación OpenSource "TodoList" que trata sobre la administración de tareas que tiene una persona en concreto
en la cual se puede administrar, crear, borrar, actualizar, o eliminar, asi como tambien hacer uso de estas funciones accediendo a traves de un login de sesión


Documentación del proyecto:

Se ha dividido en subcarpetas que contienen los archivos necesarios para poder levantar dicha aplicación que funciona con el lenguaje de programación PHP y Xampp (Mysql) como
gestor de base de datos 'phpMyadmin' y Boostrap para facilitar la creación del material HTML como CSS

## clases creadas para el funcionamiento de la Base de datos

``` php

class db {
    // contiene atributos privados de la conexión de la base de datos 
    // como el host, nombre BD , usuario y contraseña de tipo privados
} function conexion(){
    /* función que captura la conexión y nos envia una excepcion en caso se 
     produzca y si no nos retorna un valor de la conexión
     */
}
```
------------------------------------- CARPETA "model" o "modelo" que contiene el archivo "homeModel.php" -------------------------------------------------
El archivo contiene una función pública en la que instanciamos un objeto de la clase db 
anteriormente mencionada "class db"

## funciones del homeModel

``` php
    public function agregarUsuario($correo,$contraseña){
        /*
        en está función pasamos dos parametros que son necesarios para poder ingresar un usuario
        y se hace uso de la sentencia prepare de php para poder almacenar la consulta de inserción
        que va hacía una variable statement.
        */
    }
     // 2da función para poder obtener la clave de un usuario, dicha función es llamada en otro archivo php
     // para poder hacer una validación, si existe un usuario creado con cierto "correo"
    public function obtenerclave($correo){
        /*
        de igual manera se hace uso de la sentencia prepare para realizar la busqueda de un usuario
        por "SELECT password FROM usuarios WHERE correo = :correo"        
        */
     }
``` 

----------------------------- CARPETA "controller" o controlador que contiene el archivo "homeController.php" ------------------------------------------------
el archivo controller hará uso de homeModel.php y creará un objeto apartir de el



``` php
    //funcion para poder guardar un usuario temporalmente para ser procesado antes de guardarse en la Base de datos
    // pasando 2 parametros para el login que son necesarios
       public function guardarUsuario($correo,$contraseña){
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarcorreo($correo),$this->encriptarcontraseña($this->limpiarcadena($contraseña)));
            return $valor;
        }
         // uso de la función hash de php para encriptar contraseñas, (hash para encriptar contraseñas)
        public function encriptarcontraseña($contraseña){
            return password_hash();
        }
        //pasando el correo y contraseña verificamos si existe un usuario para validar el ingreso
        public function verificarusuario($correo,$contraseña){
            /* en aqui estaremos haciendo uso de la función "obtenerClave" en la cual pasamos el correo como parametro para que sea buscado en la BD */
            $llavedb = $this->MODEL->obtenerclave($correo);
            return (password_verify($contraseña,$llavedb)) ? true : false; 
            // si existe nos retorna un valor true y con la función password_verify() comparamos la contraseña encriptada con la contraseña "origen"
        }
``` 

----------------------------- CARPETA "asset/js/main.js" que contiene el archivo "main.js" ------------------------------------------------
archivo JavaScript que implementa una función que es invocada desde el formulario de login(acceder) y signup(registrar) 
se describe como una pequeña función que hace uso de:

https://fontawesome.com/
https://getbootstrap.com/

``` js
/* crearemos la funcion para mostrar la contraseña y tambien inviertiendo el icono de boostrap(click)*/
function mostrarContraseña(idPassword, idIcon){ // 2 parametros obteniendo desde los id tanto del campo contraseña como id del icon(ojo)
    let inputPassword = document.getElementById(idPassword); // con getElementById obtendremos dichos elemetos de HTML para JavaScript
    let icon = document.getElementById(idIcon);
    if(inputPassword.type =="password" && icon.classList.contains("fa-eye")){ 
        // si la entrada de contraseña es de tipo contraseña entonces al hacer click 
        // cambiamos a tipo texto e invertirmos el icono del archivo html
    }else{
        // si la entrada está en tipo texto, entonces la devolvemos como tipo
        //contraseña e invertimos el icono de html (se aprecia en la funcionalidad)
    }
}

```
----------------------------- CARPETA "en view o vista " ------------------------------------------------
es el apartado visual donde se tiene tanto el login, registrar, index o panel donde el usuario interactua con la app
pero tambien contiene archivos como verificar.php, store.php que es donde se procesan los datos a través de bucles condicionales}
para poder hacer las validaciones correctas


``` php
    require_once("c://xampp/htdocs/ToDoList_JF_IGS/controller/homeController.php");
    // instanciamos un objeto del archivo homeController
    $obj = new homeController();
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];
    $error = "";
    // si los campos estan vacíos mandamos a que el usuario vuelva a completarlos
    if(empty($correo) || empty($contraseña) || empty($confirmarContraseña)){
        $error .= "<li>Completa los campos</li>";
        header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
         // en caso de que contengan campos, verificar si las contraseñas son iguales
    }else if($correo && $contraseña && $confirmarContraseña){
        if($contraseña == $confirmarContraseña){ // de ser iguales, se accede a la funcion guardarUsuario del homeController
            if($obj->guardarUsuario($correo,$contraseña) == false){
                // si al guardar usuario se verifica si existe en la BD y nos manda un flase entonces 
                // de la variable error nos mandar un mensaje "el correo ha sido registrado"
            }else{
                // caso contrario seguir en el login.
                header("Location:login.php");
            }
        }else{ // si no se cumple que las contraseñas conincidan enviar desde la variable $error a registrar
            // se manda el valor de error en singn.up
        }
    }
``` 


RECURSOS USADOS: 

    https://getbootstrap.com/
    https://fontawesome.com/
    https://fonts.google.com/about
    http://localhost/phpmyadmin/


