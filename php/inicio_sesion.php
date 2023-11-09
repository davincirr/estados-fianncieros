
<?php
  
       include ('cone.php');

        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        
        // Consulta para buscar si el correo electronico ya 
        $result = mysqli_query($cone, "SELECT * FROM usuarios WHERE correo = '$correo'");
        $row = mysqli_fetch_array($result);
        
        //comparar la clave encriptada con la clave que el usuario ingresa
        if (password_verify($clave, $row['clave'])) {
            // redirigir al usuario a la pagina de bienvenida
            header("Location: ../bienvenida.php");
        } else {
            // redirigir al usuario a la pagina de inicio de sesion y mostrar un mensaje de error
            header("Location: ../index.php?error=1");
        }

?>

