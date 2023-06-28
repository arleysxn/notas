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
        <th>ID USUARIOS</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>USUARIO</th>
        <th>PERFIL</th>
        <th>ESTADO</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
</tr>
<tbody>
  <?php
  require_once('../../base.php');
  require_once('../../Administrador/modelos/administrador.php');

  $obj = new Administrador();
  $datos = $obj->getadmin();

  foreach($datos as $key){

  ?>

  <tr>
    <td><?php echo $key['id_usuario']?></td>
    <td><?php echo $key['Nombreusu']?></td>
    <td><?php echo $key['Apellidousu']?></td>
    <td><?php echo $key['Usuario']?></td>
    <td><?php echo $key['Perfil']?></td>
    <td><?php echo $key['Estado']?></td>
  <td><a href="editar.php?Id=<?php echo $key['id_usuario']?>" class="btn btn-danger">Actualizar</a></td>
    <td><a href="eliminar.php?=<?php echo $key['id_usuario']?>"class="btn btn-primary">Eliminar</a></td>
  </tr>

  <?php } ?>
</table>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>