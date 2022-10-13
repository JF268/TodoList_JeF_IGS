<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate en mi ToDoList</title>
    
</head>
<body>
    <form method="post">
        <h1> Registrate para administrar tus tareas </h1>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="Emial">
        <input type="submit" name="register">
    </form>
        <?php
        include("registrar.php");
        ?>
</body>
</html>