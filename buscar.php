<?php
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion($bd_config);

    if(!$conexion)
        header('Location: error.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
        $busqueda = limpiarDatos($_GET['busqueda']);

        $stm = $conexion->prepare('
            SELECT * FROM articulos WHERE titulo LIKE :busqueda OR texto LIKE :busqueda
        ');

        $stm->execute(array(':busqueda' => "%$busqueda%")); // ! los signos de '%' son para "llenar" caracteres que existan antes o despues de la busqueda
        $resultados = $stm->fetchAll();

        if(empty($resultados))
            $titulo = 'No se encontraron articulos con el termino: ' . $busqueda;
        else
            $titulo = 'Resultados de la busqueda: ' . $busqueda;
    } else 
        header('Location: '. RUTA . '/index.php');

    require 'views/buscar.view.php';

?>