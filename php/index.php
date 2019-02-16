<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lenguajes de Programación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include "../inc/header.inc";    
    ?>

    <div id="myCarousel" class="carousel slide center-block" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../img/software-3682509_640.jpg" alt="Image">
                <div class="carousel-caption">
                    <h5>INVOLUCRATE</h5>
                </div>
            </div>

            <div class="item">
                <img src="../img/bola-prog.jpg" alt="Image">
                <div class="carousel-caption">
                    <h5>EN EL MUNDO DE</h5>
                </div>
            </div>
            <div class="item">
                <img src="../img/coding-1841550_1920.jpg" alt="Image">
                <div class="carousel-caption">
                    <h5>LA PROGRAMACIÓN</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h3>LENGUAJES DE PROGRAMACIÓN</h3>
        <div class="container-fluid center-block">
                <p class="text-justify center-block">Un lenguaje de programación es un lenguaje formal que especifica una serie de instrucciones para que
                    una computadora produzca diversas clases de datos. Los lenguajes de programación pueden usarse para
                    crear programas que pongan en práctica algoritmos específicos los cuales controlan el
                    comportamiento físico y lógico de una computadora.<br>

                    Está formado por un conjunto de símbolos y reglas sintácticas y semánticas que definen su
                    estructura y el significado de sus elementos y expresiones. Al proceso por el cual se escribe, se
                    prueba, se depura, se compila (de ser necesario) y se mantiene el código fuente de un programa
                    informático se le llama programación.<br>

                    También la palabra programación se define como el proceso de creación de un programa de
                    computadora, mediante la aplicación de procedimientos lógicos, a través de los siguientes pasos:<br></p>

                    <ol class="text-justify center-block">
                        <li>El desarrollo lógico del programa para resolver un problema en particular.</li>
                        <li>Escritura de la lógica del programa empleando un lenguaje de programación específico (codificación
                            del programa).</li>
                        <li>Ensamblaje o compilación del programa hasta convertirlo en lenguaje de máquina.</li>
                        <li>Prueba y depuración del programa.</li>
                        <li>Desarrollo de la documentación.</li>
                    </ol>
                    
                    <p class="text-justify center-block">Existe un error común que trata por sinónimos los términos 'lenguaje de programación' y 'lenguaje
                    informático'. Los lenguajes informáticos engloban a los lenguajes de programación y a otros más,
                    como por ejemplo HTML (lenguaje para el marcado de páginas web que no es propiamente un lenguaje de
                    programación, sino un conjunto de instrucciones que permiten estructurar el contenido de los
                    documentos).<br>

                    Permite especificar de manera precisa sobre qué datos debe operar una computadora, cómo deben ser
                    almacenados o transmitidos y qué acciones debe tomar bajo una variada gama de circunstancias. Todo
                    esto, a través de un lenguaje que intenta estar relativamente próximo al lenguaje humano o natural.
                    Una característica relevante de los lenguajes de programación es precisamente que más de un
                    programador pueda usar un conjunto común de instrucciones que sean comprendidas entre ellos para
                    realizar la construcción de un programa de forma colaborativa.<br> </p>
            <div>
                <video controls preload="auto" autoplay loop>
                    <source src="../video/Notebook - 117.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <?php
        include "../inc/includeIndex.inc";
    ?>

    <?php
        include "../inc/footer.inc";
    ?>
</body>

</html>