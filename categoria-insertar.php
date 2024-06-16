<?php
    require_once("config.php");

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $propietario = $_POST["propietario"];
    $distrito = $_POST["distrito"];
    $rs = $cn->query("INSERT INTO mascota (nombre,edad,propietario,distrito) values('$nombre','$edad','$propietario','$distrito')");

    echo $cn-> insert_id;

    $cn->close();
?>

