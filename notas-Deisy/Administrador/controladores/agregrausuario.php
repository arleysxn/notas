<?php
include_once('../../conexion.php');
include_once('../modelos/administrador.php');

//crear el objeto de la clase administrador;

$admin = new Administrador();

//definir los argumentos que se van enviar por medio funcion
//insertar usuario

$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$Usuariousu = $_POST['txtusuario'];
$Passwordu = MD5($_POST['txtcontrasena']);
$Perfil = $_POST['txtperfil'];
$Estadousu = $_POST['txtestado'];

$admin->addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordu,$Perfil,$Estadousu);

?>