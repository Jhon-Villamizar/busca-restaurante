<?php
/* Este script destruye las variables de session y lo reenvia a login de nuevo*/
session_start();
session_destroy();
header("Location: login.php");
?>