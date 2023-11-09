<?php
  
       include ('cone.php');

        // Guardar los datos recibidos del formulario
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        //clave encriptada
        $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        
       $sql = "INSERT INTO usuarios (nombre, usuario, correo, clave) VALUES ('$nombre', '$usuario', '$correo', '$clave')";
        
        if (mysqli_query($cone, $sql)) {
            echo "Usuario registrado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($cone);
        

            }
        
?>