<?php

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tipo_id = $_POST['tipo_id'];
    $sql = "INSERT INTO producto(nombreProducto, precioProducto, idTipoProducto, estado) VALUES ('$nombre','$precio','$tipo_id',1)";
    $alerta = false;
    

    if($conn->query($sql) == true){
        $mensaje ="Producto Agregado Exitosamente"; //ESTA ES LA ALERTA

        echo "<script>";
        echo "alert('$mensaje');";
        echo "window.location.href = 'index.php';";
        echo "</script>";   
        
    } else {
        echo "ERRO! ".$sql."<br>".$conn->error;
    }
}
    
    

    $sql2 = "SELECT * FROM `tipoproducto`";
    $resultado2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="https://image.freepik.com/vector-gratis/logotipo-supermercado_23-2148459011.jpg" width="30" height="24" class="d-inline-block align-text-top">
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
          <a class="nav-link active" aria-current="page" href="addCategoria.php">Agregar Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="leer.php">Listar Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Sobre Nosotros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

   <div class="container mt-5">
   <form class="form-floating" action="crear.php" method="post">
                
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="nombre"></textarea>
                    <label for="floatingTextarea">Nombre</label>
                </div>
                <br>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="precio"></textarea>
                    <label for="floatingTextarea">Precio</label>
                </div>
                <br>
                <select class="form-select" aria-label="Default select example" name="tipo_id" id="tipo_id">
                    <option selected>Tipos de Productos</option>
                    <?php
                        include 'conexion.php';
                        while ($row2 = $resultado2->fetch_assoc()) 
                        {?>
                            <option value="<?php echo $row2['idTipoProducto'];?>"> <?php echo $row2['nombreTipoProducto'];?> </option>
                    <?php } ?>
                </select>
                
                <br>
                <input class="btn btn-primary" type="submit" value="Agregar Producto">
                
            </form>
   </div>
</body>
</html>