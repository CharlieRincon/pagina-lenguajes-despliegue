<?php
    class Model {
        private $conexion;

        public function __construct($host,$usuario,$pass,$base){
            $this->conexion = new mysqli($host,$usuario,$pass,$base);
        }

        public function desconectar(){
            $this->conexion->close();
        }

        public function insertarComentario($nombre,$comentario,$fecha,$pagina){
            $consulta = $this->conexion->stmt_init();
            $consulta->prepare("INSERT INTO comentarios (nombre, comentario, fecha, pagina) VALUES ('$nombre','$comentario','$fecha','$pagina')");
            $consulta->execute();
        }

        public function verComentarios($paginaComentarios){
            $resultado = array();
            $consulta = $this->conexion->stmt_init();
            $consulta->prepare("SELECT * FROM comentarios WHERE pagina LIKE '$paginaComentarios'");
            $consulta->execute();
            $consulta->bind_result($nombre,$comentario,$fecha,$pagina);
            while($fila = $consulta->fetch()){
                $arrayFila = array("nombre" => $nombre,"comentario" => $comentario,"fecha" => $fecha,"pagina" => $pagina);
                array_push($resultado,$arrayFila);
            }
            return $resultado;
        }

    }
?>