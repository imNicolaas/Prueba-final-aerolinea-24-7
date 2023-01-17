<?php

    session_start(); //Si se quiere trabajar con la misma sesion se debe poner session_start(); al inicio de todos los docuemtnos en los que se quiera tener la misma sesion

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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"               integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Reservar Vuelo</title>
</head>

    <header>
        <span class="Texto-24-7" onclick="irAServiciosJs()">Gestor de vuelos 24-7</span>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Cerrar_sesion.php" class="Cuadro_cerrar_sesion"> Cerrar sesión</a>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Inicio.php" class="volver_a_servicios"> Volver a servicios</a>
    </header>

<br><br><br><br><br><br>

<div class="container">
   
    <form class="form-vuelos form-control" method="post" action="/Prueba-final-aerolinea-24-7/PHP/Reservar.php">

        <div class="row">
         <div class="col-5">
        <h3 class="tituloviaje">Informacion de tu vuelo</h3> <br>
        </div>
        <div class="col-1"></div>
        <div class="col-4">
        
        </div>
        </div>

        <div class="row">
        <div class="col-1">
        </div>

        <div class="col-2">
        <label class="text-secondary form-label" for="Desde">Desde</label>
        <select id="ciudad_origen_vuelo" class="form-control" name="ciudad_origen" >
            <option>Cucuta</option>
            <option>Bucarmanga</option>
            <option>Cali</option>
            <option selected>Bogota</option>
          </select>
        </div>

        <div class="col-2">
            <label class="text-secondary form-label" for="Hacia">Hacia</label>
            <select id="ciudad_destino_vuelo" class="form-control" name="ciudad_destino">
                <option></option>
                <option>Bogota</option>
                <option>Bucarmanga</option>
                <option>Cali</option>
                <option>Cucuta</option>
              </select>
        </div>

        <div class="col-1"></div>
        <div class="col-2">
        <label class="text-primary form-label" for="Fechaida">Fecha de vuelo</label>
        <input type="date" id="fecha_vuelo" name="fecha_vuelo"><br>

    </div>
    
    <div class="col-2">
        <label class="text-primary form-label" for="Fechaida">Hora de vuelo</label>
        <input type="time" name="hora_vuelo">
        
    </div>
    
    <div class="row">
        <div class="col-8"> </div>
        <div class="col-9"> </div>
        <div class="col-10"> </div>
        <br>
        <div class="col-1">
            <button type="submit" class="btn btn-success"  id="btnRegistrar" name="btnRegistrar">Reservar</button>
        </div>
        <div class="col-1">
            <a href="infovuelos.php" class="btn btn-secondary text-end">Info</a>  
        </div>
    </div>
    
    
    
        </div>



        </div>
        
    </form>

    

</div>


<footer>

</footer>
    
</body>
</html>