<?php
include "../../../mariadb/conexion.php";
session_name('user_session'); // Asegúrate de usar el mismo nombre que al iniciar sesión
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Noticias - Comentarios</title>
    <link rel="stylesheet" href="../estilos/comentarios.css">
</head>
<body>
  <header>
        <img src="../../imagenes/7d474c3c-b255-4d66-8248-36eab89726a2-transformed (1).png">
        <nav>
            <a class="linea" href="pagina_inicio_user.php">Inicio</a><!--Diseño realizado, falta PHP-->
            <a class="linea" href="Comentarios.php">Comentarios</a><!--Diseño Basico, pendiente mejorar-->
            <a class="linea" href="Sobre mi">Sobre mi</a><!--No empezado-->
            <?php
            if(isset($_SESSION['Nombre_usuario'])) {
                ?>
            <a class="recuadro" href="cerrar sesion.php">Cerrar sesion</a><!--Diseño realizado, falta PHP-->
            <?php
            } else {
                ?>
            <a class="recuadro" href="Inicio sesion.html">Iniciar Sesion</a><!--Diseño realizado, falta PHP-->
            <?php
        }
        ?>
        
        </nav>
    </header>
    
    <div class="formulario">
        <h1>Comentarios</h1>
        <p>Muchas gracias por visitar mi página. Siempre estoy al tanto para informarte de los acontecimientos más recientes que suceden en el mundo. Con esta sección, nos permitirás mejorar el contenido, sugiriendo alguna sección o simplemente mejorando el contenido que ya disponemos. Para ello, rellena el siguiente cuadro de texto. Necesitas estar registrado para saber qué usuario nos lo ha dejado y dar su debido crédito.</p>
        <form method="POST" action="comentario.php">
            <label>Categoria:</label>
            <select id="menu" name="categoria">
            <optgroup label="Actualidad">
                <option value="Actualidad - Corazon">Corazón</option>
                <option value="Actualidad - Informativos">Informativos</option> 
                <option value="Actualidad - Gastronomia">Gastronomia</option>
                <option value="Noticias especiales actualidad">Noticias especiales</option> 
                <option value="Actualidad - Nueva seccion">Agregar una nueva seccion</option> 
            </optgroup>
            <optgroup label="Gaming">
                <option value="Gaming - Sony">Sony</option>
                <option value="Gaming - PC">PC</option> 
                <option value="Gaming - Xbox">Xbox</option> 
                <option value="Gaming - Nintendo">Nintendo</option> 
                <option value="Noticias especiales Gaming">Noticias especiales</option> 
                <option value="Gaming - Nueva seccion">Agregar una nueva seccion</option> 
        </optgroup>
            </select>
            <label> Dejanos tus comentarios:</label>
            <textarea name="descripcion" placeholder="Dejano tus comentarios"></textarea>
            <button type="submit" class="boton" name="enviar">Enviar</button>
        </form>
    </div>


</body>
</html>
