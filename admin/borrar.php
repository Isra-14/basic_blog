<?php  session_start();

require 'config.php';
require '../functions.php';

comprobar_sesion();

$conexion = conexion($bd_config);
if(!$conexion)
    header('Location: ../error.php');

$id = limpiarDatos($_GET['id']);

if(empty($id))
    header('Location: ' . RUTA . '/admin');

$stmt = $conexion->prepare('
    DELETE FROM articulos
    WHERE id = :id'
  );

$stmt->execute(array(
    ':id' => $id
));

header('Location: ' . RUTA . '/admin');

?>