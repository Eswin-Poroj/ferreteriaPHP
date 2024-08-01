<?php

include 'DB/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tipo_id = $_POST['tipo_id'];
    $estado = 1;

    $sql ="UPDATE producto SET nombreProducto='$nombre', precioProducto='$precio', idTipoProducto = '$tipo_id', estado = '$estado' WHERE idProducto = '$id'";
    $resultado = $conn->query($sql);

    if ($conn->query($sql)) {
        $mensaje ="Producto Actualizado Exitosamente";

        echo "<script>";
        echo "alert('$mensaje');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    } else {
        echo "Error".$sql."<br>".$conn->error;  
    }
} else {
    $id=$_GET['id'];

    $sql = "SELECT * FROM producto where idProducto = '$id'";
    $resultado = $conn->query($sql);
    $producto = $resultado->fetch_assoc();
    $sql = "SELECT * FROM `tipoproducto`";
    $tipos = $conn->query($sql);
}
    
    

    $sql2 = "SELECT * FROM `tipoproducto`";
    $resultado2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
  <a class="navbar-brand" href="#">
      <img src="https://image.freepik.com/vector-gratis/logotipo-supermercado_23-2148459011.jpg" width="30" height="24" class="d-inline-block align-text-top" alt="logo">
      Ferreteria Tecún Úman
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="listarProductos.php">Listar Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="nosotros.php">Sobre Nosotros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">


    <form action="actualizarProductos.php" method="post" class="form-floating">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingTextarea" name="nombre" value="<?php echo $producto['nombreProducto'] ?>">
                    <label for="floatingTextarea">Nombre</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingTextarea" name="precio" value="<?php echo $producto['precioProducto'] ?>">
                    <label for="floatingTextarea">Precio</label>
                </div>
                <br>
                <select class="form-select" aria-label="Default select example" name="tipo_id" id="tipo_id">
                    <?php
                    include 'DB/conexion.php';
                        while ($row2 = $resultado2->fetch_assoc()) 
                        {?>
                            <option value="<?php echo $row2['idTipoProducto'];?>"> <?php echo $row2['nombreTipoProducto'];?> </option>
                    <?php } ?>
                </select>

                
                
                <br>
                <input class="btn btn-primary" type="submit" value="Actualizar Producto">
    </form>
    </div>
</body>
</html>