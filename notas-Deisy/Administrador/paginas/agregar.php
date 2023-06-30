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
                    <h2>Registro</h2>
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
                                <p>Perfil:
                                    <label for="perfil"></label>
                                    <select name="txtperfil">
                                        <option></option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Docente">Docentes</option>
                                    </select>
                                </p>
                           </div>
                           <div class="Usuario">
                            <p>Estado:
                                <label for="perfil"></label>
                                <select name="txtestado">
                                    <option></option>
                                    <option value="Activo">Activo</option>
                                    <option value="No activo">No activo</option>
                                </select>
                                </p> 
                            </div>                                   
                            
                            <button href="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                                REGISTRAR</button>
        </from>
        </div>
        
    </body>
</html>
        </html>
