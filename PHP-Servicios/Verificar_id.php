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

<?php

include '../PHP/Conexion_bd.php';

$id = $_POST['id_vuelo'];

$verificar_id_vuelo = mysqli_query($conexion, "select * from vuelos where id = $id");

    if (mysqli_num_rows($verificar_id_vuelo) > 0) {
        echo '
        <script>
            alert("Este id concuerda con una reserva, se procederá al pago")
            window.location = "/Prueba-final-aerolinea-24-7/PHP-Servicios/Pago.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Este id no concuerda con ningún vuelo registrado")
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Inicio.php";
        </script>
        ';
    }

    mysqli_close($conexion);
    

?>
