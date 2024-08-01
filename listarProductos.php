<?php

  function leerDatos(){
      include 'DB/conexion.php';
      $sql = "SELECT p.idProducto, p.nombreProducto, p.precioProducto, tp.nombreTipoProducto AS tipo FROM producto p, tipoproducto tp WHERE tp.idTipoProducto = p.idTipoProducto AND p.estado = '1'";
      return $resultado = $conn->query($sql);
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
            <a class="nav-link active" href="agregarProductos.php">Agregar Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="nosotros.php">Sobre Nosotros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1 class="text-center mt-5">Todos Los Productos</h1>

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
        include 'DB/conexion.php';
        try {
          $resultado = leerDatos();
        $num = 1;
        while ($row = $resultado->fetch_assoc()) { 
        ?>
          <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $row['nombreProducto'] ?></td>
            <td><?php echo $row['precioProducto'] ?></td>
            <td><?php echo $row['tipo'] ?></td>
            <td>
              <a class="btn btn-primary" role="button" href="actualizarProductos.php?id=<?php echo $row['idProducto'] ?>">Actualizar</a>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ventanaModal" data-info="<?php echo $row['idProducto'] ?>">
                    Eliminar
                </button>
            </td>
          </tr>
      </tbody>
        <?php $num++; } } catch (Exception $th) {
          echo "error en $th";
        }?>
    </table 
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
      $(document).ready(function () {
          // Usar el evento 'shown.bs.modal' para asegurarse de que el modal se ha mostrado completamente
          $('#ventanaModal').on('shown.bs.modal', function (event) {
              let button = $(event.relatedTarget); // Botón que activó el modal
              let info = button.data('info'); // Extraer la información del atributo data-info
              let modal = $(this);
              // Actualizar el href del enlace dentro del modal
              modal.find('#confirmDelete').attr('href', 'eliminarProductos.php?id=' + info);
          });
      });

      /*
      $(document).ready(function () {
          $(".btn-primary").click(function () {
              let info = $(this).data('info');
              $('valor').html(info);
              console.log(info);
          });
      });*/
  </script>

  <div class="modal fade" id="ventanaModal" tabindex="-1" aria-labelledby="ventanaModal" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModal1Label">¡Alerta!</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  ¿Estás seguro de Eliminar el producto?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                  <a id="confirmDelete" class="btn btn-primary" role="button" href="#">Eliminar</a>
              </div>
          </div>
      </div>
  </div>
</body>

</html>