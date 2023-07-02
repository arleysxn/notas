<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilosIN.css">
    <title>ACTUALIZAR USUARIO</title>
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
    <div class="Contenedor">
        <h2>ACTUALIZAR INFORMACION</h2>
        <?php
        include_once('../../conexion.php');
        include_once('../modelos/administrador.php');
        $Id = $_GET['Id'];

        $admin = new Administrador();
        $row = $admin->getidad($Id);
        if($row) { ?>
        <form action="../controladores/actualizarusuario.php" method="POST">
            <div class="Usuario">
                <input type="hidden" name="Id" value="<?php echo $Id; ?>">
            </div>
            <div class="Usuario">
                <input type="text" required name="txtnombre" value="<?php echo $row['Nombreusu']?>">
                <label>Nombre</label>
            </div>
            <div class="Usuario">
                <input type="text" required name="txtapellido" value="<?php echo $row['Apellidousu']?>">
                <label>Apellido</label>
            </div>
            <div class="Usuario">
                <input type="text" required name="txtusuario" value="<?php echo $row['Usuario']?>">
                <label>Usuario</label>
            </div>
            <div class="Usuario">
                <input type="text" required name="txtcontrasena" value="<?php echo $row['Passwordu']?>">
                <label>Contraseña</label>
            </div>
            <div class="Usuario">
                <p>Perfil:
                    <label for="perfil"></label>
                    <select name="txtperfil">
                        <option></option>
                        <option value="Administrador" <?php if ($row['Perfil'] == 'Administrador') echo 'selected'?>>Administrador</option>
                        <option value="Docente" <?php if ($row['Perfil'] == 'Docente') echo 'selected'?>>Docente</option>
                    </select>
                </p>
            </div>
            <div class="Usuario">
                <p>Estado:
                    <label for="estado"></label>
                    <select name="txtestado">
                        <option></option>
                        <option value="Activo" <?php if ($row['Estado'] == 'Activo') echo 'selected'?>>Activo</option>
                        <option value="No activo" <?php if ($row['Estado'] == 'No activo') echo 'selected'?>>No activo</option>
                    </select>
                </p>
            </div>                                   
                            
            <button type="submit" class="btn btn-danger">REGISTRAR</button>
        </form>
        <?php } ?>
    </div>
</body>
</html>
