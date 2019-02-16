<?php
    require_once "model.php";
    require_once "config.php";

    $conexion = new Model(Config::$host,Config::$usuario,Config::$pass,Config::$base);
    $fecha = date("d/m/Y H:i:s");
    $conexion->insertarComentario($_REQUEST["nombre"],$_REQUEST["comentario"],$fecha,$_REQUEST["pagina"]);
    $conexion->desconectar();
    Header("Location: ".$_REQUEST["pagina"]);
?>