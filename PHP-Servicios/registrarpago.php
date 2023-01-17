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

<?php

include '../PHP/Conexion_bd.php';

$numero = $_POST["numero"];
$fechavencimiento = $_POST["fechavencimiento"];
$cvv = $_POST["cvv"];

$query="INSERT INTO pagos(numero, fechavencimiento, cvv) VALUES ('$numero', '$fechavencimiento', '$cvv')";

if (empty($numero) || empty($fechavencimiento) || empty($cvv)) {
    echo '
    <script>
        alert("Ninguno de los campos debe estar vacio");
        window.location = "/Prueba-final-aerolinea-24-7/PHP-Servicios/pago.php";
    </script>
    ';
} else {

    $guardar_pago = mysqli_query($conexion, $query);

    if($guardar_pago){
        echo '
        <script>
            alert("Pago realizado")
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Inicio.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Algo salio al conectarse a la base de datos, no se completó el registro")
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Inicio.php";
        </script>
        
        ';
    }
}

mysqli_close($conexion);
?>