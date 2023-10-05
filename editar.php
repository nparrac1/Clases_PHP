<?php
  $conexion = mysqli_connect("localhost","root", "", "repuestos" );
  $id_recibido = $_GET["id_enviado"];
  $consulta = "SELECT * FROM marcas WHERE id=".$id_recibido."";
  $resultado = mysqli_query($conexion, $consulta);

  while($row = mysqli_fetch_assoc($resultado)){

    $nombre = $row["nombre"];
    $origen= $row["origen"];
    $logo = $row["logo"];
    $id = $row["id"];
 }
  
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    
    <div class="container p-5">
      <div class="row">
        <div class="col">
        <form action="editar_datos.php" method = "POST">
            <input type="text" class="d-none" name="id" value=<?php echo $id ?>>
            
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" name="nombre" class="form-control" value=<?php echo $nombre ?> placeholder="Peugot">
        </div>

        <div class="input-group mb-3">
          <select class="form-select" name="origen">
              <option selected>Seleccionar Origen</option>
              <option value="japon" <?php echo $origen == "japon" ? "selected":null ?> >Japon</option>
              <option value="china" <?php echo $origen == "china" ? "selected":null ?>>China</option>
              <option value="francia" <?php echo $origen == "francia" ? "selected":null ?>>Francia</option>
          </select>
        </div>


      
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Logo</span>
          <input type="text" name="logo" value ="<?php echo $logo ?>"class="form-control" placeholder="../logo-peugot.jpg">
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">

        </form>
        </div>

      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>