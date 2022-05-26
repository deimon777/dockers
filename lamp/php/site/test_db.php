<?php
$host = "db"; //localhost
$user = "example";
$pass = "example";
$db = "lamp";

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
    echo nl2br("Error: No se pudo conectar a MySQL.\n");
    echo nl2br("Error de depuración: " . mysqli_connect_errno() . "\n");
    echo nl2br("Error de depuración: " . mysqli_connect_error());
    exit;
}

echo nl2br("Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial.\n");
echo nl2br("Información del host: " . mysqli_get_host_info($link) . "   \n");

mysqli_close($link);
