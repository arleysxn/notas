<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<br">
    <link rel="stylesheet" href="../../css/f.css">
    <title>Document</title>
</head>
<body>
  <div class="cont">
    <div class="bubble">
      <span style="--i:11;"></span>
      <span style="--i:12;"></span>
      <span style="--i:24;"></span>
      <span style="--i:10;"></span>
      <span style="--i:14;"></span>
      <span style="--i:23;"></span>
      <span style="--i:18;"></span>
      <span style="--i:16;"></span>
      <span style="--i:19;"></span>
      <span style="--i:20;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>
      <span style="--i:18;"></span>
      <span style="--i:16;"></span>
      <span style="--i:19;"></span>
      <span style="--i:20;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>
      <span style="--i:18;"></span>
      <span style="--i:21;"></span>
      <span style="--i:15;"></span>
      <span style="--i:13;"></span>
      <span style="--i:26;"></span>
      <span style="--i:17;"></span>
      <span style="--i:13;"></span>
      <span style="--i:28;"></span>
      <span style="--i:23;"></span>
      <span style="--i:18;"></span>
      <span style="--i:16;"></span>
      <span style="--i:19;"></span>
      <span style="--i:20;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>
      <span style="--i:18;"></span>
      <span style="--i:16;"></span>
      <span style="--i:19;"></span>
      <span style="--i:20;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>

    </div>
  </div>
<div class="middle">
  <a class="btn btn1" href="../../index.php">
  <img src="../../img/home.png">
   <i class="fab fa-inicio"></i>
   </a>
   <a class="btn btn2" href="../../Docentes/paginas/agregar.php">
   <img src="../../img/home.png">
   <i class="fab fa-inicio"></i>
   </a>
   <a class="btn btn3" href="../../Estudiantes/paginas/agregar.php">
   <img src="../../img/home.png">
   <i class="fab fa-inicio"></i>
   </a>
   <a class="btn btn4" href="#">
   <img src="../../img/home.png">
   <i class="fab fa-inicio"></i>
   </a>
   <a class="btn btn5" href="#">
   <img src="../../img/home.png">
   <i class="fab fa-inicio"></i>
   </a>
</div>
<div class="container">
  <div col-auto-mt-5>
  <h1>LISTA DE USUARIO</h1>
    <table class="Table">
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
  require_once('../../conexion.php');
  require_once('../modelos/administrador.php');

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
</table>
</div>
</div>
</body>
</html>