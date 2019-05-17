<?php

/**
 * datos de la coneccion
 */

$usuario = "";
$password = "";
$servidor = "";
$basededatos = "";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

if (!$conexion) {
    $alert1 = "Error: No se pudo conectar a MySQL." . PHP_EOL;
    $alert1 .= "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    $alert1 .= "error de depuración: " . mysqli_connect_error() . PHP_EOL . " Por favor ponerse en contacto con el administrador de sistemas, para recibir los mensajes de pagos contraentrega de la pagina web: <a href='https://dluchi.negos.net/pago-contraentrega-medellin'>dluchi.negos.net/pago-contraentrega-medellin</a>";

    $headers = 'From' . "Servidor de correos \r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    mail('danielarango990@gmail.com', 'conexion fallida para enviar Emails', $alert1, $headers);

    echo $alert1;

    exit;
}

echo "*- conectado: ";

?>
