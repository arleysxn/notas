<?php
include_once('../../conexion.php');
include_once('../modelos/materias.php');

//crear el objeto de la clase administrador;

$admi = new materias();

//definir los argumentos que se van enviar por medio funcion
//insertar usuario

$Id = $_POST['txtId'];
$materia = $_POST['txtmateria'];
$admin->addadmi($Id,$materia);

?>