<?php
include '../../../mariadb/conexion.php';

if(isset($_POST['enviar'])) {
    $titular = $_POST['titular'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $titulo = $_POST['titulo'];
    $comentario = $_POST['comentario'];
    $fecha = $_POST['fecha'];
    $id_categoria = $_POST['id_categoria'];


    $query = "INSERT INTO id(titular,imagen, titulo, comentario, fecha, id_categoria) VALUES ('$titular','$imagen', '$titulo', '$comentario', '$fecha', '$id_categoria')";
    $resultado = mysqli_query($conexion, $query);

    if($resultado) {
        echo "se han insertado los datos";
    } else {
        echo "No se han guardado gilipollas";
    }
} else {
    echo '
    <script>
    alert("No hay datos introducidos.");
    window.location = "titulares.php";
    </script>
    ';
}