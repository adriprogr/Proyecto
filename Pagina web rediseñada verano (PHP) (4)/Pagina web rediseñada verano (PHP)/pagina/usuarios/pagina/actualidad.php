<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola españa</title>
    <link rel="stylesheet" href="../estilos/actualidad.css">
  
</head>
<body>
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

    <section class="opciones">
        <h1 class="texto">Elija una categoria de noticias</h1>
        <div id="categoria">
            <nav>
                <a class="corazon" href="#corazon">Corazon</a>
                <a class="informativos" href="#informativos">Informativos</a>
                <a class="gastronomia" href="#Gastronomia">Gastronomia</a>
            </nav>
        </div>
    </section>

    <div id='corazon' class='cuerpo'>
        <?php
        include '../../../mariadb/conexion.php';

        $consulta = "SELECT * FROM id WHERE id_categoria = '1' ORDER BY fecha DESC LIMIT 2";
        $resultado = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($resultado) > 0) {
            echo "<h1 class='texto'>Nuevas Noticias</h1>";
            echo "<div class='noticias'>";

            while($row = mysqli_fetch_assoc($resultado)) {
                echo "<div class='noticia'>";
                echo "<a href='pagina.php?id=" . $row['id'] . "'>";
                $imagenBase64 = base64_encode($row['Imagen']);
                echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                echo "<div class='texto'>";
                echo "<h1>" . $row['Titulo'] . "</h1>";
                echo "<p>" . nl2br($row['Comentario']) . "</p>";
                echo "<p class='fecha'>" . $row['Fecha'] . "</p>";
                echo "</div>";
                echo "</a>"; 
                echo "</div>";
            }
        
            
            
            echo "</div>"; 
            
            // Ahora añades la sección de "Más Noticias" dentro del mismo contenedor
            $consulta = "SELECT * FROM id  WHERE id_categoria = '1'  ORDER BY fecha DESC LIMIT 56 OFFSET 2";
            $resultado = mysqli_query($conexion, $consulta);

            if(mysqli_num_rows($resultado) > 0) {
                echo "<h1 class='texto'>Más Noticias</h1>";
                echo "<div class='mas_noticias'>";

                while($row = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='noticia'>";
                    echo "<a href='pagina.php?id=" . $row['id'] . "'>";
                    $imagenBase64 = base64_encode($row['Imagen']);
                    echo '<img src="data:base64,' . $imagenBase64 . '" alt="Imagen">';
                    echo "<div class='texto'>";
                    echo "<h1>" . $row['Titulo'] . "</h1>";
                    echo "<p>" . nl2br($row['Comentario']) . "</p>";
                    echo "<p class='fecha'>" . $row['Fecha'] . "</p>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
                
                echo "</div>"; 
            } else {
                echo "<p>No hay más noticias para mostrar.</p>";
            }
        } else {
            echo "<p>No hay noticias para mostrar.</p>";
        }
        ?>
    </div> 
    <div id='informativos' class='cuerpo'>
        <?php
        include '../../../mariadb/conexion.php';

        $consulta = "SELECT * FROM id WHERE id_categoria = '2' ORDER BY fecha DESC LIMIT 3";
        $resultado = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($resultado) > 0) {
            echo "<h1 class='texto'>Nuevas Noticias</h1>";
            echo "<div class='noticias'>";

            while($row = mysqli_fetch_assoc($resultado)) {
                echo "<div class='noticia'>";
                echo "<a href='pagina.php?id=" . $row['id'] . "'>";
                $imagenBase64 = base64_encode($row['Imagen']);
                echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                echo "<div class='texto'>";
                echo "<h1>" . $row['Titulo'] . "</h1>";
                echo "<p>" . nl2br($row['Comentario']) . "</p>";
                echo "<p class='fecha'>" . $row['Fecha'] . "</p>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
            }
            
            echo "</div>"; 
            
            $consulta = "SELECT * FROM id  WHERE id_categoria = '2'  ORDER BY fecha DESC LIMIT 56 OFFSET 3";
            $resultado = mysqli_query($conexion, $consulta);

            if(mysqli_num_rows($resultado) > 0) {
                echo "<h1 class='texto'>Más Noticias</h1>";
                echo "<div class='mas_noticias'>";

                while($row = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='noticia'>";
                    echo "<a href='pagina.php?id=" . $row['id'] . "'>";
                    $imagenBase64 = base64_encode($row['Imagen']);
                    echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                    echo "<div class='texto'>";
                    echo "<h1>" . $row['Titulo'] . "</h1>";
                    echo "<p>" . nl2br($row['Comentario']) . "</p>";
                    echo "<p class='fecha'>" . $row['Fecha'] . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
                
                echo "</div>";
            } else {
                echo "<p>No hay más noticias para mostrar.</p>";
            }
        } else {
            echo "<p>No hay noticias para mostrar.</p>";
        }
        ?>
    </div> 
    <div id='Gastronomia' class='cuerpo'>
        <?php
        include '../../../mariadb/conexion.php';

        $consulta = "SELECT * FROM id WHERE id_categoria = '3' ORDER BY fecha DESC LIMIT 2";
        $resultado = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($resultado) > 0) {
            echo "<h1 class='texto'>Nuevas Noticias</h1>";
            echo "<div class='nuevas_noticias'>";

            while($row = mysqli_fetch_assoc($resultado)) {
                echo "<div class='noticia'>";
                echo "<a href='pagina.php?id=" . $row['id'] . "'>";
                $imagenBase64 = base64_encode($row['Imagen']);
                echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                echo "<div class='texto'>";
                echo "<h1>" . $row['Titulo'] . "</h1>";
                echo "<p>" . nl2br($row['Comentario']) . "</p>";
                echo "<p class='fecha'>" . $row['Fecha'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
            
            echo "</div>";
            
           
            $consulta = "SELECT * FROM id  WHERE id_categoria = '3'  ORDER BY fecha DESC LIMIT 56 OFFSET 2";
            $resultado = mysqli_query($conexion, $consulta);

            if(mysqli_num_rows($resultado) > 0) {
                echo "<h1 class='texto'>Más Noticias</h1>";
                echo "<div class='mas_noticias'>";

                while($row = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='noticia'>";
                    echo "<a href='pagina.php?id=" . $row['id'] . "'>";
                    $imagenBase64 = base64_encode($row['Imagen']);
                    echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen">';
                    echo "<div class='texto'>";
                    echo "<h1>" . $row['Titulo'] . "</h1>";
                    echo "<p>" . nl2br($row['Comentario']) . "</p>";
                    echo "<p class='fecha'>" . $row['Fecha'] . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
                
                echo "</div>"; 
            } else {
                echo "<p>No hay más noticias para mostrar.</p>";
            }
        } else {
            echo "<p>No hay noticias para mostrar.</p>";
        }
        ?>
    </div>
</body>
</html>