<?php
$idGET = $_GET['id'];
  function leerDatos($idTipoProducto){
  include '../DB/conexion.php';
  $sql = "SELECT p.idProducto, p.nombreProducto, p.precioProducto, tp.nombreTipoProducto AS tipo FROM producto p, tipoproducto tp WHERE tp.idTipoProducto = p.idTipoProducto AND p.idTipoProducto = '$idTipoProducto'";

  return $conn->query($sql);
  }

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Todos los Productos</title>

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
            <a class="nav-link active" aria-current="page" onclick="location.href='../index.php';" >Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" onclick="location.href='../agregarProductos.php';" >Agregar Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" onclick="location.href='../nosotros.php'">Sobre Nosotros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  include '../DB/conexion.php';
  $sql = "SELECT `nombreTipoProducto`FROM `tipoproducto` WHERE idTipoProducto = '$idGET'";
  $resultado =$conn->query($sql);
  while ($row2 = $resultado->fetch_assoc())
  {?>

      <h1 class='text-center mt-5'> <?php echo $row2['nombreTipoProducto'];?> </h1>

  <?php } ?>

  <div class="container mt-5">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">Tipo Producto</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php
        include '../DB/conexion.php';
        try {

          $resultado = leerDatos($idGET);
        $num = 1;
        while ($row = $resultado->fetch_assoc()) { 
        ?>
          <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $row['nombreProducto'] ?></td>
            <td><?php echo $row['precioProducto'] ?></td>
            <td><?php echo $row['tipo'] ?></td>
            <td>
              <a class="btn btn-primary" role="button" href="../actualizarProductos.php?id=<?php echo $row['idProducto'] ?>">Actualizar</a>
              <a class="btn btn-primary" role="button" href="../eliminarProductos.php?id=<?php echo $row['idProducto'] ?>">Eliminar</a>
            </td>
          </tr>
      </tbody>
        <?php $num++; } } catch (Exception $th) {
          echo "<script>";
          echo "alert('Error al Cargar Datos')";
          echo "</script>";
        }?>
    </table 
  </div>
</body>

</html>