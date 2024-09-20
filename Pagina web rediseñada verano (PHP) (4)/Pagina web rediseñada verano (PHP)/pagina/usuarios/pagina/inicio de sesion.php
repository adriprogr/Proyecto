<?php
        session_name('user_session'); // Cambia el nombre de la sesión para administradores
        session_start();
        include '../../../mariadb/conexion.php'; // Asegúrate de que config.php contiene la conexión a la base de datos
        
        if(isset($_POST['inicio'])) { /*Si los datos que se introdujeron no fueron erroneos se cumplira la condicion que se especifica a continuacion*/ 
            $Nombre_usuario = $_POST['Nombre_usuario'];
            $Contraseña = $_POST['Contraseña'];
        
            $sql = "SELECT * FROM usuarios WHERE Nombre_usuario = '$Nombre_usuario' AND Contraseña = '$Contraseña'";
            $resultado = mysqli_query($conexion, $sql);
        
            if ($resultado->num_rows > 0) {

                $user = $resultado->fetch_assoc();/*Actua como si fuera un guardado de datos */
                $_SESSION['usuario_id'] = $user['id'];  // Guardar id del usuario en la sesión
                $_SESSION['Nombre_usuario'] = $user['Nombre_usuario'];
                header("Location: comentarios.php"); 
        
            } else {
                echo '
                <script>
                alert("Usuario o contraseña incorrecta.");
                window.location = "inicio sesion.html";
                </script>
                ';
            } 
        } else {
            echo '
            <script>
            alert("Inicia sesion para logearte.");
            window.location = "inicio sesion.html";
            </script>
            ';
        } 
        
        
        
        ?>