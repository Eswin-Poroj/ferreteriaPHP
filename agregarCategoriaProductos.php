<?php
include 'DB/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newCategoria = $_POST['newCategoria'];

    $sql = "INSERT INTO tipoproducto(nombreTipoProducto, estado)VALUES('$newCategoria',1)";

    if ($conn->query($sql)) {
        $mensaje = "Categoria Agragada Exitosamente";

        echo "<script>";
        echo "alert('$mensaje');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    } else {
        echo "Error". $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://image.freepik.com/vector-gratis/logotipo-supermercado_23-2148459011.jpg" width="30" height="24" class="d-inline-block align-text-top" alt="logoFerreteria">
                Ferreteria Tecún Úman
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="agregarProductos.php">Agregar Productos</a>
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
        <form class="form-floating" action="agregarCategoriaProductos.php" method="post">

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="newCategoria"></textarea>
                <label for="floatingTextarea">Ingresar Nueva Categoria</label>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Agregar Categoria">

        </form>
    </div>
</body>
</html>