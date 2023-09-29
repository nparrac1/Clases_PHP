<?php
  $conexion = mysqli_connect("localhost","root", "", "alumnos" )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $consulta = "SELECT * FROM estudiantes";
       $resultado = mysqli_query($conexion, $consulta);

       while($row = mysqli_fetch_assoc($resultado)){

        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $rut = $row['rut'];
        echo "<h1>".$nombre." ".$apellido." - ".$rut."";
       }
    ?>
</body>
</html>