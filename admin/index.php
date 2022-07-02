<?php session_start();
// Archivo index del admin

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

// Comprobar si hay una sesion activa
comprobar_sesion();
if(!$conexion){
  header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);



require '../views/admin_index.view.php';


?>