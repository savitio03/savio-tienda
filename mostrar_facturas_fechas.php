<?php
$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

include_once("Cservicios.php");

$objconsulta=new cCliente;
$result=$objconsulta->mostrar_facturas_fecha($fecha2, $fecha2);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
-->
</style>
</head>
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
      <a class="nav-link" href="buscar_facturas_cliente" style="color: black; font-family:courier">Facturas del cliente</a>
    </li>
</ul>
</div>
</div>
</nav>
</header>

<body>
<form >
  <p align="center" style="color: black; font-family:courier"  >INFORMACION GENERAL </p>
  <table width="905"  align="center" bordercolor="#CCCCCC">
  <tr>
    <td><div align="center"><span class="Estilo1" style="color: black; font-family:courier" >ID Factura</span></div></td>
  </tr>
 <?php while ($row=mysql_fetch_array($result)){
       //  $row=mysql_fetch_array($result); ?>
  <tr>
    <td width="89" align="center" style="color: red; font-family:courier" ><?php echo $row['factura'] ?></td>
  </tr>
  <?php } ?>
</table>

  <label>
  <p align="center">&nbsp;</p>
  <a aling="center" href="total_factura.php" class="btn btn-outline-primary" style="color: black; font-family:courier">Mostrar total de la factura:</a>

</form>
<p align="center">&nbsp;</p>
</body>
</html>
