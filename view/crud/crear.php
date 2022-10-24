<?php
     require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/crud/connect.php");
    if(isset($_POST['submit'])){
        $tarea = $_POST['tarea'];
        $prioridad=$_POST['prioridad'];
        // preparamos la consulta 
        $sql = "insert into `tareas` (tarea,prioridad) values ('$tarea','$prioridad')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "tarea insertada";
        } else {
            die(mysqli_error($con));
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crear.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  CREAR TAREA </h1>
 </div><br>

 <label> Tarea: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Nivel de prioridad: </label>
 <input type="text" name="email" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="vistauser.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>