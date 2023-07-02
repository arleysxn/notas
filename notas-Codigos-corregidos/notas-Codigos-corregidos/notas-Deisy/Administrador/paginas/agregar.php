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
                    <h2>REGISTRAR ADMINISTRADOR</h2>
                    <form action="../controladores/agregrausuario.php" method="POST">
                        <div class="Usuario">
                            <input type="text"  name="txtnombre">
                            <label>Nombre</label>
                        </div>
                            <div class="Usuario">
                            <input type="text"  name="txtapellido">
                            <label>Apellido</label>
                            </div>
                            <div class="Usuario">
                            <input type="text"  name="txtusuario">
                            <label>Usuario</label>
                        </div>
                            <div class="Usuario">
                            <input type="password" name="txtcontrasena">
                            <label>Contraseña</label>
                        </div>
                            <div class="Usuario">
                                <p>
                                    <label">Perfil:</label>
                                    <select name="txtperfil">
                                        <option></option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Docente">Docentes</option>
                                    </select>
                                </p>
                           </div>
                           <div class="Usuario">
                            <p> 
                                <label>Estado:</label>
                                <select name="txtestado">
                                    <option></option>
                                    <option value="Activo">Activo</option>
                                    <option value="No activo">No activo</option>
                                </select>
                                </p> 
                            </div>                                   
                            
                            <button type="submit" class="btn btn-danger">REGISTRAR</button>
        </from>
        </div>
        
    </body>
</html>
        </html>
