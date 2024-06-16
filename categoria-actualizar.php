<?php
    require_once("config.php");

    $idmascota = $_POST["idmascota"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $propietario = $_POST["propietario"];
    $distrito = $_POST["distrito"];
    $rs = $cn->query("UPDATE mascota SET nombre='$nombre', edad='$edad',propietario='$propietario', distrito='$distrito' WHERE idmascota=$idmascota");

    $cn->close();
?>