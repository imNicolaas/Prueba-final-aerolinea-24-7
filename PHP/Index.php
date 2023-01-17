<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: /Prueba-final-aerolinea-24-7/PHP/Inicio.php");
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

        <button onclick="Login()" class="botones_header boton_login">Iniciar sesión</button>

        <button onclick="Registrarse()" class="botones_header boton_registrarse">Registrarse</button>

    </header>

    <div class="textos">
        <Span class="Texto-bienvenido">¡Bienvenido!</Span>

        <span class="Texto-explicacion">Este es un sistema de consulta, reserva y compra de billetes de avión para la Aerolinea 24-7.</span>        
    </div>
    
    <script src="../JS/Script.js"></script>
    
</body>
</html>