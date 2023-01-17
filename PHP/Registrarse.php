<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolinea 24-7</title>

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

    <div class="container">
        
        <div class="div__register">
            <form action="/Prueba-final-aerolinea-24-7/PHP/Registro_usuario.php" method="post" class="formulario__register">

                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">

                    <button class="botones_divs">Enviar</button>

            </form>
            
        </div>

    </div>
    
    
    
    <script src="../JS/Script.js"></script>
    
</body>
</html>