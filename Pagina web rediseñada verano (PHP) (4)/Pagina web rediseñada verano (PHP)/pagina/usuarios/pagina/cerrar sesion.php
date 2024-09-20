<?php
session_name('user_session');/*NO TERMINADO*/
session_start();
session_destroy();
header("Location: pagina_inicio.php");
exit();
?>
