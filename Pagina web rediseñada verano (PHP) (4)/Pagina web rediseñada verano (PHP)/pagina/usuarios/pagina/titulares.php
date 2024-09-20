<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
</head>
<body>
<form method="post" action="creador_titulares.php" enctype="multipart/form-data">
<input type="text" name="titular" id="titulo"> 
    <br>
    <br>
    <input type="file" name="imagen">
    <br>
    <br>
    <input type="text" name="titulo" id="titulo"> 
    <br>
    <br>
    <input type="text" name="comentario" id="comentario">
    <br>
    <br>
    <input type="datetime-local" name="fecha" id="fecha">
    <br>
    <br>
    <div class="opciones">
        <select id="menu" name="id_categoria">
            <option value="1">Corazón</option> <!-- ID 1 -->
            <option value="2">Información</option> <!-- ID 2 -->
            <option value="3">Gastronomía</option> <!-- ID 3 -->
        </select>
    </div>
    <br>
    <button type="submit" name='enviar'>Enviar</button>
</form>
</body>
</html>