<?php


require_once("producto.php");


$objProducto = new Producto($_POST["id_producto"],$_POST["nombre"],$_POST["descripcion"],$_POST["marca"],
$_POST["precioCompra"],$_POST["precioVenta"],$_POST["categoria"],$_POST["stock"]);

$objProducto->guardar();

echo $objProducto->getIdProducto();
echo $objProducto->getNombre();
echo $objProducto->getDescripcion();
echo $objProducto->getMarca();
echo $objProducto->getPrecioCompra();
echo $objProducto->getPrecioVenta();
echo $objProducto->getCategoria();
echo $objProducto->getStock();
?>