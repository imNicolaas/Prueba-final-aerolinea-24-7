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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
        crossorigin="anonymous">
        
        <title>Consulta de vuelos</title>
    </head>

    <body>

        <header>
            <span class="Texto-24-7" onclick="irAServiciosJs()">Gestor de vuelos 24-7</span>

            <a href="/Prueba-final-aerolinea-24-7/PHP/Cerrar_sesion.php" class="Cuadro_cerrar_sesion"> Cerrar sesión</a>

            <a href="/Prueba-final-aerolinea-24-7/PHP/Inicio.php" class="volver_a_servicios"> Volver a servicios</a>
        </header>
        
        <h1>Consulta de vuelos</h1>

        <h2>¿Cuando viajas?</h2>

        <div class="contenedor">
            <form class="div_info_vuelos" method="post" action="/Prueba-final-aerolinea-24-7/PHP-Servicios/Resultados_consulta.php">

                <div class="a">
                    <h3>Consulte por rango de fechas</h3>
                    <label for="fecha_1">Desde</label> <br>
                    <input type="date" id="fecha_1" name="fecha_1">
                </div>

                <div class="b">
                    <label for="fecha_2">Hasta</label> <br>
                    <input type="date"  id="fecha_2" name="fecha_2">
                </div>

                <div class="c">
                    <label for="ciudad_1">Desde</label> <br>
                        <select id="ciudad_1" name="ciudad_1" >
                            <option>Cucuta</option>
                            <option>Bucaramanga</option>
                            <option>Cali</option>
                            <option selected>Bogota</option>
                        </select>
                </div>

                <div class="d">
                    <label for="ciudad_2">Hacia</label> <br>
                            <select id="ciudad_2" name="ciudad_2" >
                                <option selected></option>
                                <option>Cucuta</option>
                                <option>Bucaramanga</option>
                                <option>Cali</option>
                                <option>Bogota</option>
                            </select>
                </div>

                <button type="submit" class="Boton_consultar">Consultar</button>

            </form>
        </div>

    </body>
</html>
