<?php

/**para evitar el bloqueo de cors para origenes desconocidos */
header('Access-Control-Allow-Origin: *');
require('connection.php');

if (isset($_POST)) {
  //Obtenemos valores input formulario

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $direccion = $_POST['direccion'];
  $numerodetelefono = $_POST['numerodetelefono'];
  $correo = $_POST['correo'];
  $ciudad = $_POST['ciudad'];
  $barrio = $_POST['barrio'];
  $producto = $_POST['producto'];
  $mensaje = $_POST['mensaje'];

  //correo para:
  $para = 'danielarango990@gmail.com';

  //asunto
  $asuntos = 'Pedido Contra entrega! por: ' . $nombre;

  //Creamos cabecera.
  $headers = 'From' . " " . $correo . "\r\n";
  $headers .= "Content-type: text/html; charset=utf-8";

  //Componemos cuerpo correo.
  $msjCorreo = "Nombre: " . $nombre;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Apellidos: " . $apellido;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Cedula: " . $cedula;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Direccion: " . $direccion;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Telefono: " . $numerodetelefono;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Correo: " . $correo;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Ciudad: " . $ciudad;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Barrio: " . $barrio;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Producto: " . $producto;
  $msjCorreo .= "\r\n";
  $msjCorreo .= "Mesaje: " . $mensaje;
  $msjCorreo .= "\r\n";

  if ($nombre == "" || $numerodetelefono == "" || $mensaje == "" || $ciudad == "") {
    echo "Nada para mostrar..";
  } else if (mail($para, $asuntos, $msjCorreo, $headers)) {
    //conexion a la base de datos
    if ($conexion) {
      $sql = "INSERT INTO datos (nombre, apellido, cedula, direccion, telefono, correo, ciudad, barrio, producto, mensaje, para) VALUES ('$nombre','$apellido','$cedula','$direccion','$numerodetelefono','$correo','$ciudad','$barrio','$producto','$mensaje','$para')";
      if (mysqli_query($conexion, $sql)) {
        echo "form.php ->  ",
        'Nombre: ' . $nombre .
          'Apellido: ' . $apellido .
          'Cedula: ' . $cedula .
          'Direccion: ' . $direccion .
          'Numero de telefono:' . $numerodetelefono .
          'Correo: ' . $correo .
          'Barrio: ' . $barrio .
          'Producto: ' . $producto .
          'Mensaje: ' . $mensaje .
          'Para: ' . $para;
      } else {
        echo "Error al enviar los datos " . $sql . "<br>" . mysqli_error($conexion);
      }
      mysqli_close($conexion);
    } else {
      echo "error al conectar a la base de datos ";
    }
    /**/

  } else {
    echo "Fallo al enviar los datos al servidor";
  }
}
