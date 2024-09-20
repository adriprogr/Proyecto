<?php
session_name('user_session'); // Asegúrate de usar el mismo nombre que al iniciar sesión
session_start();
include '../../../mariadb/conexion.php'; // Asegúrate de que config.php contiene la conexión a la base de datos

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['Nombre_usuario'])) {
    echo "Debes iniciar sesión para publicar un comentario.";
    exit;
}

if (isset($_POST['enviar'])){
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $id_usuario = $_SESSION['usuario_id']; // Obtenemos el ID del usuario desde la sesión

    $sql = "INSERT INTO comentarios (categoria, descripcion, id_usuario) VALUES ('$categoria', '$descripcion', '$id_usuario')";
    $resultado = mysqli_query($conexion,$sql);


    if($resultado){
        echo "Comentario guardado correctamente.";
    } else {
        echo "Error al guardar el comentario.";
    }
}
    ?>