<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilosIN.css">
    <title>Document</title>
</head>
<body>
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
