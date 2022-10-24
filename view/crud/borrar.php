<?php
     include "connection.php";
    if(isset($_GET['tarea'])){
        $id = $_GET['tarea'];
        $sql = "DELETE from `tareas` where tarea=$tarea";
        $conn->query($sql);
    }
    header('location:/ToDoList_JF_IGS/view/crud/vistauser.php');
    exit;
?>