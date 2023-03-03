<?php
/* controladores */
require_once "controlador/usuarioControlador.php";
require_once "controlador/plantillaControlador.php";
/* modelos */
require_once "modelo/usuarioModelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();