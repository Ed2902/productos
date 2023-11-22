<?php

require_once "producto.php";
$producto = Producto::mostrar();

?>
<html>
    
    <head>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    </head>

    <body>

      <table  id="myTable" class="table table-bordered">
          <thead>
          <tr>
              <th>ID</th>
              <th>NOMBRE</th>
              <th>Descripcion</th>
              <th>Marca</th>
              <th>Precio de Compra</th>
              <th>Precio Venta</th>
              <th>Categoria</th>
              <th>Stock</th>
          </tr>
          </thead>
          <tbody>
        <?php foreach ($producto as $item): ?>
          <tr>
          <th> <?php echo $item['id_producto']; ?> </th>
          <th> <?php echo $item['nombre'];?></th>
          <th> <?php echo $item['descripcion'];?></th>
          <th> <?php echo $item['marca'];?></th> 
          <th> <?php echo $item['precioCompra'];?></th>
          <th> <?php echo $item['precioVenta'];?></th>
          <th> <?php echo $item['categoria'];?></th>
          <th> <?php echo $item['stock'];?></th>
          </th>
          </tr>
        <?php endforeach; ?>
          </tbody> 
        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script>
          $(document).ready(function() {
              $('#myTable').DataTable( {
                  "processing": true,
                  "serverSide": true,
                  "ajax": "../server_side/scripts/server_processing.php"
              } );
          } );
          </script>
    </body>

</html>