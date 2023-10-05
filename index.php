<?php
  $conexion = mysqli_connect("localhost","root", "", "repuestos" );
  $consulta = "SELECT * FROM marcas";
  $resultado = mysqli_query($conexion, $consulta);
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <div class="container p-5">
      <div class="row">
        <div class="col">
        <form action="guardar.php" method = "POST">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" name="nombre" class="form-control" placeholder="Peugot">
        </div>

        <div class="input-group mb-3">
          <select class="form-select" name="origen">
              <option selected>Seleccionar Origen</option>
              <option value="japon">Japon</option>
              <option value="china">China</option>
              <option value="francia">Francia</option>
          </select>
        </div>

      <a href="eliminar.php"></a>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Logo</span>
          <input type="text" name="logo" class="form-control" placeholder="../logo-peugot.jpg">
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
        </div>
        <div class="col">
        <table class="table">
     <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Nombre</th>
        <th scope="col">Origen</th>
        <th scope="col">Imagen</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>

    <tbody>

      <?php
      

        while($row = mysqli_fetch_assoc($resultado)){

          echo "<tr>";
          echo "<td>".$row["id"]."</td>";
          echo "<td>".$row["nombre"]."</td>";
          echo "<td>".$row["origen"]."</td>";
          echo "<td>".$row["logo"]."</td>";

          echo "<td>";
          echo "<a href='eliminar.php?id_enviado=".$row["id"]."'>";
          echo "<button class = 'btn btn-sm'>Eliminar</button>";
          echo "</a>";
        
          echo "<a href='editar.php?id_enviado=".$row["id"]."'>";
          echo "<button class = 'btn btn-sm'>Editar</button>";
          echo "</a>";
          echo "</td>";

          echo "</tr>";
          
       }
      ?>

    </tbody>
    </table>
        </div>
      </div>
    </div>
    
    
  </body>
</html>