<?php
include '../../../mariadb/conexion.php';
if(isset($_POST['registro'])) { /*Si los datos que se introdujeron no fueron erroneos se cumplira la condicion que se especifica a continuacion*/
    $Titulo = $_POST['Titulo'];
    $Contenido1 = $_POST['Contenido1'];
    $Fecha = $_POST['Fecha'];
    $Titulo_2 = $_POST['Titulo_2'];
    $Contenido_2 = $_POST['Contenido_2'];
    $Titulo_3 = $_POST['Titulo_3'];
    $Contenido_3 = $_POST['Contenido_3'];
    $id_noticia = $_POST['id_noticia'];


    $Imagen = '';
    if (isset($_FILES['Imagen'])){
        $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    }

    $Imagen_2 = '';
    if (isset($_FILES['Imagen_2'])) {
        $Imagen_2 = addslashes(file_get_contents($_FILES['Imagen_2']['tmp_name']));
    }


    $query = "INSERT INTO titulares_corazon_comentados(Titulo, Contenido1, Fecha, Imagen, Titulo_2, Contenido_2, Imagen_2, Titulo_3, Contenido_3,id_noticia) values ('$Titulo', '$Contenido1', '$Fecha', '$Imagen', '$Titulo_2', '$Contenido_2', '$Imagen_2', '$Titulo_3', '$Contenido_3', '$id_noticia')";
    $resultado = mysqli_query($conexion, $query);

    if(mysqli_num_rows($resultado) > 0) {
        echo '<script>alert("Se ha insertado correctamente")</script>';
    } else {
        echo '<script>alert("errorw")</script>';

    }
    } else {
        echo '<script>alert("error");
        window.location = "noticias2.php";

        </script>';

}
?>