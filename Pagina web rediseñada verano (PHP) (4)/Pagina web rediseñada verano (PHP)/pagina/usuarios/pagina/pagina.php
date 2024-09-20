<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             * {
    scroll-behavior: smooth; 
}

body {
    background-color: #f4f4f9;
    display: flex;
    flex-direction: column;
    margin: 0;
    padding: 0;
}

header {
    display: flex;
    justify-content: space-around;
    flex-wrap:wrap;

    padding: 10px;
    position: relative;
}

header::after,
header::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(390deg, rgb(169, 96, 169), rgb(53, 149, 167), rgb(184, 148, 79));
    border-radius: 10px;
    z-index: -1;
    transform-origin: left;
    animation: animacion 1s ease-in-out;
}

header::after {
    transform-origin: right;
}

@keyframes animacion {
    from {
        transform: scale(0);
    }
    to {
        transform: scale(1);
    }
}

header nav {
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
}

header nav a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    padding: 10px;
}

header img {
    width: 180px;
}

.linea {
    position: relative;
}

.linea::after,
.linea::before {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    background: white;
    width: 100%;
    height: 3px;
    border-radius: 20px;
    transform: scale(0);
    transition: 0.4s ease;
}

.linea:hover::after {
    transform: scale(1);
    transform-origin: left;
}

.linea:hover::before {
    transform: scale(1);
    transform-origin: right;
}

.recuadro {
    padding: 10px;
    text-decoration: none;
    color: rgb(0, 0, 0);
    position: relative;
    z-index: 1;
    transition: 0.5s;
}

.recuadro:hover {
    color: rgb(0, 0, 0);
}

.recuadro::after,
.recuadro::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(255, 255, 255);
    border-radius: 20px;
    transform: scale(0);
    transition: 0.6s;
    z-index: -1;
}

.recuadro:hover::after {
    transform: scale(1);
    transform-origin: right;
}

.recuadro:hover::before {
    transform: scale(1);
    transform-origin: left;
}
.noticia {
    text-align: justify;
    width: 100%;
    max-width: 900px;
    padding: 10px;
    margin: auto; 
}
.noticia img{
            width: 100%;
            max-width: 900px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="../../imagenes/pixelcut-export (5) (1).png">
        <nav>
            <a href="pagina_inicio_user.php" class="linea">Inicio</a>
            <a href="comentarios.php" class="linea">Comentarios</a>
            <a href="" class="linea">Sobre mi</a>
            <a href="inicio sesion.html" class="recuadro">Inicio Sesion</a>
        </nav>
    </header>
    <?php
    include '../../../mariadb/conexion.php';

    if (isset($_GET['id'])) {
        $id_noticia = $_GET['id'];
    } else {
        $id_noticia = 0;
    }    
    if ($id_noticia > 0) {
        $consulta = "SELECT * FROM titulares_corazon_comentados WHERE id_noticia = $id_noticia";
        $resultado = mysqli_query($conexion, $consulta);
    
        if(mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                echo "<h1>" . $row['Titulo'] . "</h1>";
                echo "<p>" . nl2br($row['Contenido1']) . "</p>";
                echo "<p>" . $row['Fecha'] . "</p>";
                $imagenBase64 = base64_encode($row['Imagen']);
                echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                echo "<h1>" . $row['Titulo_2'] . "</h1>";
                echo "<p>" . nl2br($row['Contenido_2']) . "</p>";
                $imagenBase64 = base64_encode($row['Imagen_2']);
                echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                echo "<h1>" . $row['Titulo_3'] . "</h1>";
                echo "<p>" . nl2br($row['Contenido_3']) . "</p>";
            } 
        } else {
            echo "<p>No hay noticias para mostrar.</p>";
        }
    } else {
        echo "<p>ID de noticia no válido.</p>";
    }
    
?>
</body>
</html>



<!--<section class="noticia">
    <h1>Piratas del Caribe de Disney atraca en Battle Royale de Fortnite con "Velas malditas"</h1>
    <p>17 de agosto de 2024</p>
    <p>¡Caramba! Piratas del Caribe de Disney ha izado sus velas malditas y ha atracado en Fortnite como parte de la corrección de la versión 30.20 de Battle Royale del 19 de julio ("Velas malditas"). Levad anclas con el espectral barco en una botella, explorad Navíos Naufragados y buscad tesoros enterrados. Velas malditas estará disponible hasta el 6 de agosto de 2024 a las 10:00 CEST. </p>
    <img src="fortnite.jpg" width="100%">
    <h1>¿Os subís al... barco de batalla?</h1>
    <p>Hacer de las vuestras en el mar os ayudará a completar misiones de Velas malditas y a desbloquear un alijo enterrado de recompensas para el juego en el pase de Velas malditas. </p>
    <p>Saquead la ruta de recompensas gratuita del pase para desbloquear objetos del mundo de Piratas del Caribe, como el pico Sable y calvario de Jack y el accesorio mochilero Premio de Jack. La ruta de recompensas prémium añade un montón de recompensas adicionales que podréis desbloquear junto con los tesoros de la ruta de recompensas gratuita. Al adquirir esta mejora, también desbloquearéis al instante el traje de Jack Sparrow.</p>
    <h1>Recompensas y doblones</h1>
    <p>Si vais a zarpar en vuestro navío maldito en pos de saqueos pirata, os traemos buenas noticias: no solo cruzaréis la isla de Battle Royale, sino que también conquistaréis misiones de Velas malditas.</p>
    <p>Completar misiones de Velas malditas os llenará los bolsillos de oro maldito. Cuanto más tengáis, más objetos podréis desbloquear con el pase de Velas malditas. Id a la pestaña de Velas malditas de la sala para comprobar vuestro alijo de oro y las recompensas disponibles del pase. </p>
    <img src="fortnite 1.png">
    <p>¿Aún tenéis ganas de saquear? El pase de Velas malditas tiene una ruta de recompensas gratuita y una prémium, disponible por 1000 paVos. La ruta de recompensas gratuita contiene 11 recompensas desbloqueables, entre ellas, el accesorio mochilero Calavera y espadas y el pico Sable y calvario de Jack. ¡Completad vuestro viaje hasta los confines de la ruta de recompensas y desbloquearéis el accesorio mochilero Premio de Jack!</p>
    <img src="fortnite 3.jpg">
</section>