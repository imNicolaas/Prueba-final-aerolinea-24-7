<?php 

//Los archivos php se estaban descargando por que hay que poner las carpetas de los proyectos con archivos php que se quieran ejecutar en el directorio C:\xampp\htdocs ya que al usar Xampp como servidor local toma esta ruta como localhost y es en el unico directorio en el que se van a ejecutar 

//el mysqli_connect no funciono solo con el localhost ya que hay que poner el puerto que tengo configurado para MySql en Xampp el cual ahora mismo es el 3310, también se puede ver desde el localhost en la parte de arriba donde sale la ip:puerto, en este caso era 127.0.0.1:3310

$conexion = mysqli_connect("localhost:3310", "root", "", "registros_aerolinea_24-7");

/*
    if($conexion){
        echo 'conectado';
    }else{
        echo 'no';
    }
*/





?>