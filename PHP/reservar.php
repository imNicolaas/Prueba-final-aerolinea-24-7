<?php

include 'conexion_bd.php';

$ciudad_origen = $_POST["ciudad_origen"];
$ciudad_destino = $_POST["ciudad_destino"];
$fecha_vuelo = $_POST["fecha_vuelo"];
$hora_vuelo = $_POST["hora_vuelo"];

$query="INSERT INTO vuelos (Ciudad_origen, Ciudad_destino, Fecha_vuelo, hora_vuelo) VALUES ('$ciudad_origen', '$ciudad_destino', '$fecha_vuelo', '$hora_vuelo')";

$ejecutar_reserva = mysqli_query($conexion, $query);

    if($ejecutar_reserva){
        echo '
        <script>
            alert("Vuelo reservado")
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Algo salio al conectarse a la base de datos, no se completó el registro")
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
        </script>
        
        ';
    }
?>