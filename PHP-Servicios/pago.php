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

    <title>Pagos</title>
</head>

<body>

    <header>
        <span class="Texto-24-7" onclick="irAServiciosJs()">Gestor de vuelos 24-7</span>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Cerrar_sesion.php" class="Cuadro_cerrar_sesion"> Cerrar           sesión</a>

        <a href="/Prueba-final-aerolinea-24-7/PHP/Inicio.php" class="volver_a_servicios"> Volver a servicios</a>
    </header>

<br><br>

<div class="container">
   
    <form class="form-pago form-control" method="POST" action="registrarpago.php">
        <fieldset>Forma de pago</fieldset>
        <div class="row">

            <div class="col-3">

            </div>

        
            <div class="col-3">
                <P class="fw-bold">Tarjeta de credito</P>
                <label for="numero">numero</label> <br>
                <input type="number"  id="numero" name="numero">
                <label for="fechavencimiento">fecha de vencimiento</label>
                <input type="date" id="fechavencimiento" name="fechavencimiento"><br>
                <label for="">cvv</label> <br>
                <input type="text" placeholder="###" name="cvv" id="cvv">
            </div>

            

            <div class="col-3"> 
               
            <button type="submit" class="btn btn-success"  id="btnRegistrar" name="btnRegistrar">Pagar</button>
            
            </div>

        </div>


    </form>
</div>


<footer>

</footer>

</body>
</html>
