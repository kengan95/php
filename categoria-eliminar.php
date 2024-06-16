<?php
    require_once("config.php");

    $idmascota = $_POST["idmascota"];
    $rs = $cn->query("DELETE FROM mascota WHERE idmascota = $idmascota");

    $cn->close();
?>