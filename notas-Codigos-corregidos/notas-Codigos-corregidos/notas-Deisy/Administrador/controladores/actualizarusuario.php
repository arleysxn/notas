<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if ($_POST) {
    $admin = new Administrador();

    $Id = $_POST['Id'];
    $Nombreusu = $_POST['txtnombre'];
    $Apellidousu = $_POST['txtapellido'];
    $Usuariousu = $_POST['txtusuario'];
    $Passwordusu = md5($_POST['txtcontrasena']);
    $Perfil = $_POST['txtperfil'];
    $Estadousu = $_POST['txtestado'];

    $admin->updatead($Id, $Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Perfil, $Estadousu);
    if ($admin) {
        echo "<script>alert('Usuario actualizado');
        window.location='../paginas/listado.php';</script>";
    } else {
        echo "<script>alert('Usuario no actualizado');
        window.location='../paginas/editar.php';</script>";
    }
}
?>
