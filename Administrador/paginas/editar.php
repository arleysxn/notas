<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name= "Viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/estilosIN.CSS">
        <title>Document</title>
        </head>
            <body>
                <div class="Contenedor">
                    <h2>ACTUALIZAR INFORMACION</h2>
                    <?php
                    include_once('../..conexion.php');
                    include_once('../modelos/administrador.php');
                    $Id = $_GET['Id'];

                    $admin = new  Administrador();
                    $row = $admin->getidad($Id);
                    if($row)
                        ?>
                    <form action="../controladores/actualizarusuario.php" method="POST">
                        <input type="hidde" name="Id" value="<?php echo [$Id]?>">
                        <div class="Usuario">
                            <input type="text" required name="txtnombre" value="<?php echo [$Nombreusu]?>">
                            <label>Nombre</label>
                        </div>
                            <div class="Usuario">
                            <input type="text" required name="txtapellido" value="<?php echo [$Apellidousu]?>">
                            <label>Apellido</label>
                            </div>
                            <div class="Usuario">
                            <input type="text" required name="txtusuario" value="<?php echo [$Usuariousu]?>">
                            <label>Usuario</label>
                        </div>
                            <div class="Usuario">
                            <input type="text" required name="txtcontrasena" value="<?php echo [$Paswordusu]?>">
                            <label>Contraseña</label>
                        </div>
                            <div class="Usuario">
                                <p>Perfil:
                                    <label for="perfil"></label>
                                    <select name="txtperfil" value="<?php echo [$Perfil]?>">
                                        <option></option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Docente">Docentes</option>
                                    </select>
                                </p>
                           </div>
                           <div class="Usuario">
                            <p>Estado:
                                <label for="perfil"></label>
                                <select name="txtestado" value="<?php echo [$Estadousu]?>">
                                    <option></option>
                                    <option value="Activo">Activo</option>
                                    <option value="No activo">No activo</option>
                                </select>
                                </p> 
                            </div>                                   
                            
                        <a href="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            ACTUALIZAR
        </a>
        </from>
        </div>
        
    </body>
</html>
