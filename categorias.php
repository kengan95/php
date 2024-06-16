<?php
    require_once("config.php");

    $rs = $cn->query("select * from mascota order by idmascota");

    //vamos a recuperar cada una de las filas en la tabla categorias
    //si la fila($row) 
    while($row = $rs->fetch_assoc()){
        //lo ponemos en un arreglo
        $res[] = $row;
    }

    //JSON_UNESCAPED_UNICODE estos parametros son importantes por  compatibilidad con las tildes, los acentos y las caracteristicas generales
    echo json_encode($res,JSON_UNESCAPED_UNICODE);

    //para cerrar la coneccion
    $cn->close();
?>