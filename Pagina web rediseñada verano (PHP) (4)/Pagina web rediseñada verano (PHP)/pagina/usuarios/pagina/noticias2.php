<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Noticia</h1>
    <form method="post" action="noticias.php" enctype="multipart/form-data">
        <label for="Titulo">Título:</label>
        <input type="text" name="Titulo" required><br><br>


        <label for="Contenido1">Contenido 1 </label>
        <input type="text" name="Contenido1"required ><br><br>

        <label for="Fecha">Fecha</label>
        <input type="datetime-local" name="Fecha" required><br><br>
        
        <label for="Imagen">Imagen 1</label>
        <input type="file" name="Imagen" required> <br><br>
        
        <label for="Titulo_2">Título2</label>
        <input type="text" name="Titulo_2" required><br><br>

        <label for="Contenido_2">Contenido 2 </label>
        <input type="text" name="Contenido_2"required ><br><br>

        <label for='Imagen_2'> Imagen 2</label>
        <input type="file" name="Imagen_2"><br><br>

        <h1> Contenido Opcional </h1>


        <label for="Titulo_3">Título 3</label>
        <input type="text" name="Titulo_3" ><br><br>

        <label for="Contenido_3">Contenido 3 </label>
        <input type="text" name="Contenido_3" ><br><br>

        <label for="id_noticia">id_Categoria 3</label>
        <input type="text" name="id_noticia" ><br><br>


        <button type="submit" name="registro" values="enviar">Enviar</button>
</body>
</html>