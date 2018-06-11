<?php
session_start();
/* este script permite validar que si las variables de session estan presentes deje pasar a los archivos que tenganm este include
en caso contrario, lo devuelva a login
*/
if (!isset($_SESSION['dsnombre'])) header("Location: login.php");
?>