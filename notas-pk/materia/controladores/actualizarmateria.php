<?php
require_once('../..conexion.php');
require_once('../modelos/administrador.php');

if($_POST){

    $admin = new Administrador();

    $id = $_POST['Id'];
    $Nombreusu = $_POST['txtnombre'];
    $Apellidousu = $_POST['txtapellido'];
    $Usuariousu = $_POST['txtusuario'];
    $Paswordusu = $_POST['txtcontrasena'];
    $Perfil= $_POST['txtperfil'];
    $Estadousu= $_POST['txtestado'];

    $admin->updatead($Id, $Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Perfil, $Estado);
    if($admin)
    {
        print "<script>alert(\"Usuario actualizado\");
        window.location='../paginas/index.php';</script>";
    }else
    {
        print "<script>alert(\"Usuario no actualizado\");
        window.location='../paginas/editar.php';</script>";
    }
    




}

?>