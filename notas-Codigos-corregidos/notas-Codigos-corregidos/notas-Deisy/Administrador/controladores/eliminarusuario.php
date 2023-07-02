<?php
include_once('../../conexion.php');
include_once('../modelos/administrador.php');
$admin = new Administrador();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Id=$_POST['Id'];
    $result=$admin->deletead($Id);
    if($result){
        print "<script>alert(\"Usuario eliminado\");
        window.location=:'../paginas/listado.php';</script>";
    }else{
        print "<script>alert(\"Usuario no eliminado\");
        window.location=:'../paginas/eliminar.php';</script>";
    }
}
?>