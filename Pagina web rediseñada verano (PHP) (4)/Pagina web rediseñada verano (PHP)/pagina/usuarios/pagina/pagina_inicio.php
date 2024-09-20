<?php
include "../../../mariadb/conexion.php";
session_name('user_session'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/inicio.css">
</head>
<body>
    <header>
        <img src="../../../imagenes/Portal noticias.png">
        <nav>
            <a href="" class="linea">Inicio</a>
            <a href="" class="linea">Sobre mi</a>
            <a href="" class="linea">Comentarios</a>
            <?php
            if(isset($_SESSION['usuario'])) {
                ?>
                    <a class="recuadro" href="cerrar sesion.php">Hola usuario</a>
                <?php
            } else {
                ?>
                    <a class="recuadro" href="inicio sesion.html">Iniciar Sesion</a>
                <?php
            }
            ?>
        
        </nav>
    </header>
    <section class="opciones">
        <h1 class="texto"> Selecciona una de las siguientes categorias de noticias</h1>
        <div class="categorias">
            <div class="categoria1">
                <img class="imagen1" src="../../../imagenes/actualidad.jpg">
                <div class="texto">
                    <h3 class="texto">Actualidad</h3>
                    <a class="boton" href="actualidad.php#corazon">Entrar</a><!--Con esta redireccion dejo seleccionada la opcion de corazon de la pagina siguiente-->
                </div>
            </div>
            <div class="categoria2">
                <img class="imagen2" src="../../../imagenes/Designer.jpeg">
                <div class="texto">
                    <h3 class="texto">Videojuegos</h3>
                    <a class="boton" href="videojuegos.html">Entrar</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
</body>
</html>