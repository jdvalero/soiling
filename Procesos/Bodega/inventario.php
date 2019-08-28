<?php 
  require_once "php/conexion.php";
  require_once "php/metodosCrud.php";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inventario</title>
    <link rel="stylesheet" type="text/css" href="../../css/Estilo_inv.css">
  </head>
  <body>

    <header >
    <div class="wrapper1">
      <div class="logo1">
        Soiling
      </div>
      <nav class="nav">
      <ul class="menu">


<li> <a href="index2.html">Inicio</a> </li>


        <li><a href="#">Registros</a>
        <ul class="submenu">

          
      
          <li><a href="../Productos/Reg_productos.php">Registrar producto</a></li>
         
          <li><a href="../Pedidos/Pedido.php">Pedido</a></li>
          <li><a href="cre_almacen.html">Crear Almacen</a></li>
      
        </ul>
        </li>
          <ul class="submenu">
           
           
           
        
          </ul>
        </li>
        <li><a href="#">Gestiones</a>
        <ul class="submenu">
            <li><a href="../Bodega/inventario.php">Gestion de bodega</a></li>
            <li><a href="../Pedidos/Con_Pedidos.php">Control pedidos</a></li>
            
        </ul>
       </li>
       <li><a href="index.html">Cerrar sesion</a></li>

      </ul>

    </nav>
    </div>
  </header>
<br><br><br>
<section>
<br>
<br><br><br><br>
<center>
<div class="container">
  <br>

  <h1>Consulta Bodega</h1>
  <br>
       <br>
       <select required="" class="derecha">
        <option value="volvo">Seleccionar Bodega</option>
      <option value="volvo">Chirajara</option>
      <option value="saab">Bogota</option>
      <option value="mercedes">La grande</option>
      <option value="audi">Madrid</option>
       </select>
  <br>
    <br>
  <table style="width:100%" >
  <tr>
    <th>ID</th>
    <th>Medida</th>
    <th>Categoria</th>
    <th>Marca</th>
    <th>Nombre</th>
    <th>Descripcion</th>
     <th>Saldo</th>
    <th>Precio</th>
     <th>Ubicacion</th>
      <th>IVA</th>
       <th>Comentario</th>
<?php 
  $obj= new metodos();
  $sql="SELECT * from producto";
  $datos=$obj->mostrarDatos($sql);

  foreach ($datos as $key ) {
 ?>
  <tr>
    <td><?php echo $key['idProducto']; ?></td>
    <td><?php echo $key['Unidademedida_idUnidademedida']; ?></td>
    <td><?php echo $key['Categoria_IdCategoria']; ?></td>
    <td><?php echo $key['Marca_idMarca']; ?></td>
    <td><?php echo $key['Nom_producto']; ?></td>
    <td><?php echo $key['Descripcion']; ?></td>
     <td><?php echo $key['Saldo']; ?></td>
      <td><?php echo $key['Precio']; ?></td>
       <td><?php echo $key['Ubicacion']; ?></td>
        <td><?php echo $key['Iva']; ?></td>
        <td><?php echo $key['Comentario']; ?></td>
    <td>
      <a href="Mod_Producto.php?id=<?php echo $key['idProducto'] ?>">
      Editar
      </a>
    </td>
    <td>
      <a href="php/eliminar.php?id=<?php echo $key['idProducto'] ?>">
      eliminar
      </a>
    </td>
  </tr>
<?php 
  }
 ?>
</table>
</form>
</div>

<br>
<br>
<section class="blue">

  <div class="wrapper">
            <table >
   <br>
                <br>
              <td colspan="2">

                <img src="../../imagenes/Logo_SOILING_Light.png">
              </td>

           <td>
             <ul class="pool">
               <li class="pool">Social Media</li>
               <li class="pool">facebook</li>
                    <li class="pool">Twiter</li>
                         <li class="pool">Instagram</li>
                            <li class="pool">Youtube</li>
             </ul>
           </td>
             <td>
             <ul class="pool">
               <li class="pool">Ubicacion</li>
               <li class="pool">Dirección e informaciónn de contacto.

</li>
                    <li class="pool">Dirección: Carrera 2B No. 69A – 35

</li>
                         <li class="pool">Correo: soilingsas@gmail.com

</li>
                            <li class="pool">Teléfono: (+57) 1 249 7675

</li>
             </ul>
           </td>
             <td>
             <ul class="pool">
               <li class="pool">Design:Tecdeluxe</li>
               <li class="pool">facebook</li>
                    <li class="pool">Twiter</li>
                         <li class="pool">Instagram</li>
                            <li class="pool">Youtube</li>
             </ul>
           </td>
            </table>
            <br><br>
       <div class="footer">
            <p>Copyright (c) 2019</p>
       </div>
       </section>

  </body>
</html>