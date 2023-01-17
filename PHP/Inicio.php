<?php

    session_start();

        if(!isset($_SESSION['usuario'])){
                echo '
                <script>
                    alert("Debes iniciar sesión")
                    window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
                </script>
                ';
            session_destroy();
            die();
        }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de vuelos 24-7</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/Prueba-final-aerolinea-24-7/CSS/Style.css">

</head>

<body>

    <header>
        <span class="Texto-24-7" onclick="volverAInicio()">Gestor de vuelos 24-7</span>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Cerrar_sesion.php" class="Cuadro_cerrar_sesion"> Cerrar sesión</a>
    </header>

    <div class="container_divs">

        <div class="divs_servicios div_consultar">
            <h2>Consultar vuelos</h2>
            <p>Consulte vuelos por tarifa, destino y fechas.</p>
    
            <div onclick="irAConsultar()" class="Botones_divs_servicios">Consultar</div>
        </div>
    
        <div class="divs_servicios div_reservar">
            <h2>Reservar vuelos</h2>
            <p>Reserve los billetes que sean de su interes desde nuestra plataforma.</p>
    
            <div onclick="irAReservar()" class="Botones_divs_servicios">Reservar</div>
        </div>

        <div class="divs_servicios div_comprar">
            <h2>Comprar vuelos</h2>
            <p>Compre los billetes que haya reservado directamente desde nuestra plataforma.</p>
    
            <div onclick="irAdarId()" class="Botones_divs_servicios">Comprar</div>
        </div>

    </div>

    
    <script src="../JS/Script.js"></script>

</body>
</html>
