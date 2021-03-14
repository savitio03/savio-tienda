
<?php
$factura=$_POST['factura'];

include_once("Cservicios.php");

$objconsulta=new cCliente;
$result=$objconsulta->mostrar_total($factura);

?>
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
  <body  >
    <form id="form1" name="form1" method="post" action="total_factura.php">
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
            <a class="nav-link" href="buscar_productos_factura" style="color: black; font-family:courier">Total de la factura</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <p align="center" style="color: black; font-family:courier" >TOTAL FACTURA </p>
    <table width="1350"  align="center" border="3">
    <tr>
      <td><div align="center" style="color: black; font-family:courier" ><span class="Estilo1">ID Factura</span></div></td>
      <td><div align="center" style="color: black; font-family:courier" ><span class="Estilo1">Total Factura</span></div></td>
    </tr>
   <?php while ($row=mysql_fetch_array($result)){
         //  $row=mysql_fetch_array($result); ?>
    <tr>
      <td width="149" align="center" style="color: black; font-family:courier" ><?php echo $row['factura'] ?></td>
      <td width="149" align="center" style="color: black; font-family:courier" ><?php echo $row['total_factura'] ?></td>

    </tr>
    <?php } ?>
  </table>

  <label>

</form>
<p align="center">&nbsp;</p>
</body>
</html>
