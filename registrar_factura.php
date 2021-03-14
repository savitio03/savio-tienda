<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


  </head>

  <link href="styles/style.css" rel="stylesheet" type="text/css">
  <body background="rclien.jpg" >
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color: black; font-family:courier">Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="registrar_factura" style="color: black; font-family:courier">Registrar un factura</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <div class="container-fluid">
<form id="form1" name="form1" method="post" action="recibe_datos_factura.php">
  <p align="center" style="color: white; font-family:courier" >REGISTRAR FACTURA </p>

  <div class="mb-3">
    <label class="form-label"  style="color: white; font-family:courier">ID Cliente</label>
    <input type="text" name= "id_cliente" class="form-control"  >
  </div>
  <div class="mb-3">
    <label class="form-label"  style="color: white; font-family:courier">Factura</label>
    <input type="text" name= "factura" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label"  style="color: white; font-family:courier">Fecha</label>
    <input type="date" name= "fecha" class="form-control" >
  </div>

<div align="center">
  <input style="color: black; font-family:courier" type="submit" name="Submit" value="Registrar Factura" /></div>
  <label>
</form>
<p align="center">&nbsp;</p>
</div>
</body>
</html>
