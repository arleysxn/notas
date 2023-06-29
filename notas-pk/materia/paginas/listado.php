<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<br>
<h1>Lista de usuarios</h1>
<div class="container">
  <div col-auto-mt-5>
    <table class="Table table-dark table-hover">
      <tr>
        <th>ID MATERIAS</th>
        <th>NOMBRE MATERIA</th>
      
</tr>
<tbody>
  <?php
  require_once('../../conexion.php');
  require_once('../modelos/materias.php');

  $obj = new materias();
  $datos = $obj->getadmin();

  foreach($datos as $key){

  ?>

  <tr>
    <td><?php echo $key['txtId']?></td>
    <td><?php echo $key['txtmateria']?></td>
  <td><a href="editar.php?Id=<?php echo $key['id_materia']?>" class="btn btn-danger">Actualizar</a></td>
    <td><a href="eliminar.php?=<?php echo $key['id_materia']?>"class="btn btn-primary">Eliminar</a></td>
  </tr>

  <?php } ?>
</table>
    <title>Document</title>
</head>
<body>
    
</body>
</html>