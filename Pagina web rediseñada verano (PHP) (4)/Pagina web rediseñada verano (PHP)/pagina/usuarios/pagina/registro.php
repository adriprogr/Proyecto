<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"><!--Necesario para implementar los iconos de las redes sociales-->
    <link rel="stylesheet" href="../estilos/inicio y registro.css">
    <title>Document</title>
</head>
<body>
<!--Idea: Introducir el mismo header, uno mas ligero con menos opciones para que el usuario pueda retroceder u otra alternativa-->
    <!--Formulario-->
    <form method="POST">
        <h1>Registro</h1>
        <!--Logo de la pagina principal -->
        <img class="form" src="../../../imagenes/Portal noticias.png">
        <div class="imagenes">
            <!--Logo de las paginas secundarias-->
            <img src="../../../imagenes/pixelcut-export (5) (1) (1).png">
            <img src="../../../imagenes/pixelcut-export (4) (1) (4).png">
        </div>
        <div class="usuarios">
            <input class="faltante" type="text" placeholder="Idea faltante(Nombre de cliente)" name="Nombre_cliente" disabled ><!--Falta introducir en la base de datos-->
            <input type="text" placeholder="Introduzca nombre de usuario" name="Nombre_usuario">
            <input type="password" placeholder="Contraseña" name="Contraseña">
        </div>
        <input class="pulse" type="submit"value="Registrate" name="registro" >
        <!--Linea horizontal que la utilizo para dar al usuario la opcion de registrarse si no tiene una cuenta-->
        <div class="linea-horizontal">
            <p>o</p>
        </div>
        <div class="enlace">
            <a href="inicio sesion.html">Iniciar Sesion</a>
        </div>
        <p>*El nombre de usuario debe tener mas de 5 caractares y menos de 25*</p>
        <p>*La contraseña debe tener mas de 10 caracteres y menos 25*. Recomendable poner caracteres especiales</p>

        <!--Iconos de las redes sociales-->
        <ul class="Redes">
            <li class="facebook"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li class="twitter"><a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li class="instagram"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <?php
 include ('../../../mariadb/conexion.php');

    if(isset($_POST['registro'])) { /*Si los datos que se introdujeron no fueron erroneos se cumplira la condicion que se especifica a continuacion*/ 
     if (strlen($_POST['Nombre_usuario']) >= 5 && strlen($_POST['Nombre_usuario']) <= 25 && strlen($_POST['Contraseña']) >= 10 && strlen($_POST['Contraseña']) <= 25) {/*Esta condicion indica que el nombre de usuario y la contraseña tienen que tener como minimo 5 caracteres y maximo 25*/ 
         /*Asigno variables*/
         $Nombre_usuario = $_POST['Nombre_usuario'];
         $Contraseña = $_POST['Contraseña'];

         /*Consulta a la base de datos para comprobar que el nombre de usuario que se introduzca esta repetido*/
         $consulta = "SELECT * FROM usuarios where Nombre_usuario= '$Nombre_usuario' and Contraseña= '$Contraseña'";
         $resultado = mysqli_query($conexion, $consulta);
         /*Si el usuario introducido se encuentra en la base de datos nos dara este mensaje*/
         if(mysqli_num_rows($resultado) > 0) {
             ?>
             <h3 class="meh">*El nombre de usuario ya ha sido utilizado*</h3>
             <?php
         /*Si no esta repetido, simplemente añade el usuario y contraseña a la base de datos*/
         } else {
             $consulta = "INSERT INTO usuarios(Nombre_usuario,Contraseña, Id_rol) VALUES ('$Nombre_usuario','$Contraseña', 2)";/*Este registro es solo para clientes por lo que se registraran automaticamente con el id_Cargo que es igual al de clientes.*/
             $ejecutar = mysqli_query($conexion, $consulta);
             if($ejecutar) {
                 ?>
                 <h3 class="correcto">Te has registrado correctamente</h3>
                 <?php
             } else {
                 ?>
                 <h3 class="error">*Error en el registro, inténtalo de nuevo*</h3>
                 <?php
             }
         }
     /*Esta condicion hace referencia a la primera, por lo que si no se cumplio nos indicara que los campos estan incompletos ya que no se cumplio los caracteres minimos*/
     } else {
         ?>
         <h3 class="error">*Campos incompletos*</h3>
         <?php
     }
     
 }
 ?>
    </form>
</body>
</html>
</body>
</html>