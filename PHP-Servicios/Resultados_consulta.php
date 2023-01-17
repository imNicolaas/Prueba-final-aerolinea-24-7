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
    <title>Resultados Busqueda</title>

    <link rel="stylesheet" href="/Prueba-final-aerolinea-24-7/CSS/Style-servicios.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
        crossorigin="anonymous">
</head>
<body>

        <header>
            <span class="Texto-24-7" onclick="irAServiciosJs()">Gestor de vuelos 24-7</span>

            <a href="/Prueba-final-aerolinea-24-7/PHP/Cerrar_sesion.php" class="Cuadro_cerrar_sesion"> Cerrar sesión</a>

            <a href="/Prueba-final-aerolinea-24-7/PHP/Inicio.php" class="volver_a_servicios"> Volver a servicios</a>
        </header>

        <h1>Vuelos disponibles</h1>
    
</body>
</html>


<?php
        include '../PHP/Conexion_bd.php';
        $consulta_vuelos="SELECT * FROM vuelos_disponibles";

        $query=mysqli_query($conexion,$consulta_vuelos);

        $fecha_1 = $_POST['fecha_1'];
        $fecha_2 = $_POST['fecha_2'];
        $ciudad_1 = $_POST['ciudad_1'];
        $ciudad_2 = $_POST['ciudad_2'];

        if($query){
            while($campo = $query->fetch_array()){

                $id = $campo['id'];
                $ciudad_origen = $campo['Ciudad_origen'];
                $ciudad_destino = $campo['Ciudad_destino'];
                $fecha_vuelo = $campo['Fecha_vuelo'];
                $hora_vuelo = $campo['hora_vuelo'];
                

                if ($fecha_vuelo >= $fecha_1 && $fecha_vuelo <= $fecha_2 && $ciudad_origen == $ciudad_1 && $ciudad_destino == $ciudad_2) {
                
?>
                <div class="divs_vuelos" >
                    <h4 >id del vuelo: <?php echo $id; ?>.</h4>
                        <div>
                            <p>
                                <b>Origen: </b><?php echo $ciudad_origen?>.<br>
                                <b>Fecha de salida: </b><?php echo $fecha_vuelo?>.<br>
                                <b>Hora de salida: </b><?php echo $hora_vuelo?>.<br>
                                <b>Destino: </b><?php echo $ciudad_destino?>.<br>
                            </p>
                        </div>
                </div>
<?php
                    # code...
                } else {
                    # code...
                }
                

                
            }

        }
?>
