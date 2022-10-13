<?php
   //incluimos nuestro archivo de conexión con mysql
    include("con_db.php");
    //iniciamos una estructura if para verificar si la conexión se cumple
    if($cone) { //variable conec del archivo "con_db.php"
        echo "funcionando!";
    } else {
        echo "error de conexión";
    }

?>