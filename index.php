<?php
/* controladores */
require_once "controlador/usuarioControlador.php";
require_once "controlador/clienteControlador.php";
require_once "controlador/productoControlador.php";
require_once "controlador/plantillaControlador.php";
/* modelos */
require_once "modelo/usuarioModelo.php";
require_once "modelo/clienteModelo.php";
require_once "modelo/productoModelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();