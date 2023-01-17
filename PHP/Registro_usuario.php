<?php 

include 'Conexion_bd.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, correo, contrasena) 
                  values('$nombre_completo', '$correo', '$contrasena')";

//estaba bien lo del video, no me estaba funcionnado por que en mi INSERT INTO tenia como segundo campo correo, y el en el phpmyadmin en la base de datos el segundo campo se llamaba usuario, ademas en mi INSERT INTO como tercer campo tenia contrasena y en la base de datos de phpmyadmin el tercer campo se llamaba contraseña con ñ

$verificar_correo = mysqli_query($conexion, "select * from usuarios where correo = '$correo'");

    if (empty($nombre_completo) || empty($correo) || empty($contrasena)) {
        echo '
        <script>
            alert("Ninguno de los campos debe estar vacio");
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Registrarse.php";
        </script>
        ';
    } else if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
        <script>
            alert("Este correo ya esta registrado")
            window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
        </script>
        ';
    } else {

        $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar){
            echo '
            <script>
                alert("Registrado")
                window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
            </script>
            ';
        }else{
            echo '
            <script>
                alert("Algo salio al conectarse a la base de datos, no se completó el registro")
                window.location = "/Prueba-final-aerolinea-24-7/PHP/Index.php";
            </script>
            
            ';
        }
    }

mysqli_close($conexion);


?>