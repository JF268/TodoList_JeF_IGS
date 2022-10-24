<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Practica 1</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="">Tus Tareas pendientes</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="crear.php">AÑADIR TAREA</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Descripción</th>
        <th>Niv. Prioridad</th>
      </tr>
    </thead>
    <tbody>
      <?php
        require_once("c://xampp/htdocs/ToDoList_JF_IGS/view/crud/connection.php");
        $sql = "select * from tareas";
        $result = $conn->query($sql);
        if(!$result){
          die("Error al insetar");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        
        <td>$row[tarea]</td>
        <td>$row[prioridad]</td>
        <td>
                  <a class='btn btn-success' href='/ToDoList_JF_IGS/view/crud/editar.php?.tarea=$row[tarea]'>Edit</a>
                  <a class='btn btn-danger' href='borrar.php?id=$row[tarea]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>