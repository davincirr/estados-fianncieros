
<?php
        /*require_once  BASE_DIR  '/php/cone.php';*/
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cubillos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">iniciar sesión</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__Registrarse">Registrarse</button>
                </div>
            </div>
            <!--login y registro-->
            <div class="contenedor__login-registro">
                <!--login-->
                <form action="php/inicio_sesion.php" method="POST" class="formulario__login">

                    <h2>Iniciar sesión</h2>
                    <!-- Si existe la variable error, mostrar el mensaje de error -->
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error">Usuario o Contraseña incorrecta</p>
                    <?php } ?>

                    <input type="email" name="correo" placeholder="Correo electronico">
                    <input type="password" name="clave" placeholder="Contraseña">
                    <button type="submit">Entrar</button>
                </form>
                <!--registro-->
                <form action="php/registro.php"  method="POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre completo">
                    <input type="email" name="correo" placeholder="Correo electronico">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="clave" placeholder="Contraseña">
                    <button type="submit" >Registrarse</button>
                </form>


            </div>

        </div>



    </main>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="asset.js_0.1.9/js/scrip.js"></script>

</body>
</html>

