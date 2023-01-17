<?php

session_start();

include 'Conexion_bd.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "select * from usuarios where correo = '$correo' and contrasena = '$contrasena'");

    if (empty($correo) || empty($contrasena)){
        echo '
        <script>
            alert("Ninguno de los campos debe estar vacio");
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Login.php";
        </script>
        ';
    }else {
        if(mysqli_num_rows($validar_login) > 0){
            $_SESSION['usuario'] = $correo;
            header("location: /Prueba-final-aerolinea-24-7/PHP/Inicio.php");
        }else{
            echo'
            <script>
                alert("Error al ingresar, registrese o intentelo nuevamente")
                window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
            </script>
            ';
        }
    }
?>