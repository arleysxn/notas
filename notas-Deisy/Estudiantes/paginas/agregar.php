<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name= "Viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/estiloEs.css">
        <title>Document</title>
        </head>
            <body>
                <div class="Contenedor">
                    <h2>Formulario</h2>

                    <?php
                    require_once('../../conexion.php');
                    require_once('../../metodos.php');

                    $me = new Consultas();

                    ?>
                    <form action="">
                        <div class="Usuario">
                            <input type="text" required>
                            <label>Nombre</label>
                        </div>
                            <div class="Usuario">
                            <input type="text" required>
                            <label>Apellido</label>
                        </div>
                            <div class="Usuario">
                            <input type="number" required>
                            <label>Documento</label>
                        </div>
                            <div class="Usuario">
                            <input type="text" required>
                            <label>Correo</label>
                        </div>                                  
                            
                        <div class="Usuario">
                            <label>Seleccionar materia</label>
                            <select name="txtmateriaestu" class="form-control input-lg">
                                <option>Seleccionar</option>
                            <?php
                            $mate =$me->getmaterias();
                            if($mate != null )
                            {
                                foreach($mate as $ma)
                                {
                                    ?>
                                    <option value="<?php echo $ma['Nombrema'];?>"><?php echo $ma['Nombrema'];?></option>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                            <div class="Usuario">
                            <label >Seleccionar Docente:</label>
                            <select name="txtmateriaestu" class="form-control input-lg">
                                <option>Seleccionar</option>
                                <?php
                                $mate=$me->getdocentes();
                                if($mate != null)
                                {
                                    foreach($mate as $ma){
                                        ?>
                                        <option value="<?php echo $ma['Nombredoc'];?>"><?php echo $ma['Nombredoc'];?></option>
                                        <?php
                                    }
                                }
                                ?>
                        </div>   
                            <div class="Usuario">
                            <input type="text" required>
                            <label>Promedio</label>
                        </div>
                            <div class="Usuario">
                            <input type="number" required>
                            <label>Fecha registro</label>
                        </div>      
                               
                        <a href="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Enviar
        </a>
        </from>
        </div>
        
    </body>
</html>
        </html>
