<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name= "Viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/estilosIN.CSS">
        <title>formulario agregar materias </title>
        </head>
            <body>
                <div class="Contenedor">
                    <h2>AGREGAR MATERIA</h2>
                    <form action="../controladores/agregrmateria.php" method="POST">
                        <div class="Usuario">
                            <input type="text"  name="txtId">
                            <label>ID MATERIA</label>
                        </div>
                            <div class="Usuario">
                            <input type="text"  name="txtmateria">
                            <label>NOMBRE MATERIA</label>
                            </div>
                            <button type="submit" class="btn btn-danger">REGISTRAR</button>
        </from>
        </div>
        
    </body>
</html>
        </html>