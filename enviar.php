<?php

    $destino="gerencia@arcoirislatinoamerica.com";
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];
    $contenido= "Nombre: ". $nombre. "\nemail: ". $email. "\ntelefono: ". $telefono. "\nemail: ". $email. "\Mensaje: ". $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:index.html");


?>