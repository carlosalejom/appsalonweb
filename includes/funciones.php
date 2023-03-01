<?php 

function obtenerServicios() : array {

    try {

        // Importar una conexion
        require 'database.php';

        // Escribir el codigo sql
        mysqli_set_charset($db, "utf8mb4"); // lee el PHP en UTF-8 para leer caracteres especiales

        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);

        // arreglo vacio 
        $servicios = [];

        $i = 0;

        // obtener los resultados 

        while( $row = mysqli_fetch_assoc($consulta)){
            $servicios[$i] ['id'] = $row['id'];
            $servicios[$i] ['nombre'] = $row['nombre'];
            $servicios[$i] ['precio'] = $row['precio'];

            $i++;
        }

        // echo "<pre>";
        // var_dump($servicios);
        // echo "</pre>";

        return $servicios;
        
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();
