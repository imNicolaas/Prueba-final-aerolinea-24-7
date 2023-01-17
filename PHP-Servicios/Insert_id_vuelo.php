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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Prueba-final-aerolinea-24-7/CSS/Style-servicios.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"               integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Verificar reserva</title>
</head>

    <header>
        <span class="Texto-24-7" onclick="irAServicios()">Gestor de vuelos 24-7</span>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Cerrar_sesion.php" class="Cuadro_cerrar_sesion"> Cerrar sesión</a>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Inicio.php" class="volver_a_servicios"> Volver a servicios</a>
    </header>

<br><br><br><br><br><br>

<div class="container">
   
    <form class="form-vuelos form-control" method="post" action="/Prueba-final-aerolinea-24-7/PHP-Servicios/Verificar_id.php">

        <div class="row">
         <div class="col-5">
        <h3 class="tituloviaje">Digite el id del vuelo reservado</h3> <br>
        </div>
        <div class="col-1"></div>
        <div class="col-4">
        
        </div>
        </div>

        <div class="row">
        <div class="col-1">
            <input type="text" name="id_vuelo">
        </div>

    
    <div class="row">
        <div class="col-8"> </div>
        <div class="col-9"> </div>
        <div class="col-10"> </div>
        <br>
        <div class="col-1">
            <button type="submit" class="btn btn-success"  id="btnRegistrar" 
            name="btnRegistrar">Consultar vuelo reservado</button>
        </div>
    </div>
        
    </form>

   
</div>

<footer>

</footer>

</body>
</html>
