
 <?php

include_once("DbManager.php");

class cCliente
{
	//Constructor
	function cCliente()
	{


	}
  function mostrar_total($factura)
  {

    $con=new DBManager;

    //usamos el mtodo conectar para realizar la conexin
    if ($con->conectar()==true)
    {
      $query="SELECT sum(p.precio * v.cantidad) as total_factura FROM productos p, ventas v, facturas f
      WHERE f.factura = '$factura' && v.factura = f.factura && p.id_producto = v.id_producto";
      $resultado=mysql_query($query) or die("Error en Consulta de facturas");
      return $resultado;
    }

  }
  function mostrar_facturas_fecha($fecha1,$fecha2)
  {

    $con=new DBManager;

    //usamos el mtodo conectar para realizar la conexin
    if ($con->conectar()==true)
    {
      $query="SELECT factura from facturas where fecha>='$fecha1' && fecha<='$fecha2'";
      $resultado=mysql_query($query) or die("Error en Consulta de facturas");
      return $resultado;
    }

  }

  function mostrar_facturas_cliente($id_cliente)
  {

    $con=new DBManager;

    //usamos el mtodo conectar para realizar la conexin
    if ($con->conectar()==true)
    {
      $query="select f.factura, p.nombre, v.cantidad, f.fecha from productos p, ventas v, facturas f where f.id_cliente = '$id_cliente'
      && p.id_producto = v.id_producto && f.factura = v.factura";
      $resultado=mysql_query($query) or die("Error en Consulta de facturas");
      return $resultado;
    }

  }

  function mostrar_productos_facturas($factura)
  {

    $con=new DBManager;

    //usamos el mtodo conectar para realizar la conexin
    if ($con->conectar()==true)
    {
      $query="SELECT p.id_producto, f.id_cliente, p.nombre, p.precio FROM productos p, ventas v, facturas f WHERE f.factura = '$factura'
      && v.id_producto = p.id_producto && v.factura = f.factura";
      $resultado=mysql_query($query) or die("Error en Consulta de facturas");
      return $resultado;
    }

  }

	function registrar_cliente($id_cliente,$nombre,$direccion)
	{
		//creamos el objeto $con a partir de la clase DBManager
		$con=new DBManager;
		if ($con->conectar()==true)
		{
			$query="insert into cliente(id_cliente,nombre,direccion) VALUES('$id_cliente','$nombre','$direccion')";
			$resultado=mysql_query($query) or die("Error en registro cliente");
		}
                 include_once("registrar_cliente.php");
	}


  function registrar_factura($id_cliente,$factura,$fecha)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {
      $query="insert into facturas(id_cliente,factura,fecha) VALUES('$id_cliente','$factura','$fecha')";
      $resultado=mysql_query($query) or die("Error en registro de la factura");
    }
                 include_once("registrar_factura.php");
  }


  function registrar_venta($id_producto,$cantidad,$factura)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {
      $query="insert into ventas(id_producto,cantidad,factura) VALUES('$id_producto','$cantidad','$factura')";
      $resultado=mysql_query($query) or die("Error en registro de la venta");
    }
                 include_once("registrar_venta.php");
  }
  function registrar_producto($id_producto,$nombre,$precio,$id_proveedor,$existencias)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {
      $query="insert into productos(id_producto,nombre, precio, id_proveedor, existencias) VALUES('$id_producto','$nombre','$precio','$id_proveedor','$existencias')";
      $resultado=mysql_query($query) or die("Error en registro del producto");
    }
                 include_once("registrar_proveedor.php");
  }

  function registrar_proveedor($id_proveedor,$nombres)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {
      $query="insert into proveedor(id_proveedor,nombres) VALUES('$id_proveedor','$nombres')";
      $resultado=mysql_query($query) or die("Error en registro del proveedor");
    }
                 include_once("registrar_proveedor.php");
  }


}



?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
