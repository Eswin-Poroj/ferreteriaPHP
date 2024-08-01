<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria</title>
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
          <a class="nav-link active" href="agregarProductos.php">Agregar Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="agregarCategoriaProductos.php">Agregar Categoria</a>
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

<div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://sumaqmercados.pe/wp-content/uploads/2023/04/sumaq-mercados-blog-tipos-de-ferreteria.jpg" class="d-block w-100 h-100" alt="imagen de una ferreteria">
    </div>
    <div class="carousel-item">
      <img src="https://cvn.com.co/wp-content/uploads/2019/05/tool-2663036_1920.jpg" class="d-block w-100 h-100" alt="imagen de una ferreteria">
    </div>
    <div class="carousel-item">
      <img src="https://carbonestore.cr/cdn/shop/articles/ferreteria.webp?v=1665104174" class="d-block w-100 h-100" alt="imagen de una ferreteria">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h1 class="text-center mt-5">Categorias Populares</h1>

<div class="container mt-5">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100" onclick="location.href='categorias/categorias.php?id=1';">
      <img src="https://www.emb.cl/construccion/pixnoti/2018/20180723p7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cementos</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" onclick="location.href='categorias/categorias.php?id=5';">
      <img src="https://images.pexels.com/photos/19825178/pexels-photo-19825178/free-photo-of-metal-monitor-mostrar-exhibicion.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Hierros</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div onclick="location.href='categorias/categorias.php?id=7';" class="card h-100">
      <img src="https://laminadosindustriales.com.mx/wp-content/uploads/2018/08/lamina-galvanizada-ag-20-compressor.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laminas</h5>
        <p class="card-text text-black" >This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div onclick="location.href='categorias/categorias.php?id=2';" class="card h-100">
      <img src="https://st3.depositphotos.com/1177973/14617/i/450/depositphotos_146177691-stock-photo-tools-on-wooden-background.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Electricidad</h5>
          <p class="card-text text-black" >This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="w-auto p-3 mt-5 text-bg-dark">
        <p class="text-center fw-medium fs-4">Ferreteria Tecún Úman 2024</p>
        <img class="me-2" width="35px" height="35px" onclick="location.href='https://fb.com/estuardo.poroj.37';" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Facebook_logo_%28square%29.png" alt="logoFacebook">
        <img class="me-2" width="35px" height="35px" onclick="location.href='https://instagram.com/eswin_poroj1';" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1000px-Instagram_logo_2022.svg.png" alt="logoInstagram">
        <img class="me-2" width="35px" height="35px"  onclick="location.href='https://github.com/Eswin-Poroj';" src="https://cdn.worldvectorlogo.com/logos/github-icon-2.svg" alt="logoGitHub">



</div>

</body>
</html>