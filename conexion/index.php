<?php
    require_once "model.php";
    require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comentarios</title>
</head>
<body>
    <form action="procesarComentario.php" method="POST">
        <label for="id_nombre">Nombre</label><br>
        <input type="text" id="id_nombre" name="nombre"/><br>
        <label for="id_comentario">Comentario</label><br>
        <textarea id="id_comentario" name="comentario"></textarea><br>
        <?php
        echo '<input type="hidden" name="pagina" value="'.$_SERVER['PHP_SELF'].'"/>';
        ?>
        <input type="submit" name="boton" value="Enviar"/>
    </form>
    <table>
        <?php
            $conexion = new Model(Config::$host,Config::$usuario,Config::$pass,Config::$base);
            $comentarios = $conexion->verComentarios($_SERVER['PHP_SELF']);
            foreach($comentarios as $valor){
                echo "<tr><td>".$valor['nombre']."</td><td>".$valor['comentario']."</td><td>".$valor['fecha']."</td></tr>";
            }
            $conexion->desconectar();
        ?>
    </table>
</body>
</html>
