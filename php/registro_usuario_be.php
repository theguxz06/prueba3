<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios2(nombre_completo, Correo, Usuario, contrasna) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    //verifocar que el correo no se repita
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios2 WHERE Correo= '$correo' ");

    if(mysqli_num_rows($verificar_correo) >0){
        echo '
            <script>
            alert("Este correo ya esta registrado, intenta con otro");
             window.location = "../index.php"; 
            </script>          
        ';
        exit();
    }
      //verifocar que el nombre de usuario no se repita
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios2 WHERE Usuario= '$usuario' ");
     if(mysqli_num_rows($verificar_usuario) >0){
        echo '
            <script>
            alert("Este usuario ya esta registrado, intenta con otro");
             window.location = "../index.php"; 
            </script>          
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    

    mysqli_close($conexion);
?>
