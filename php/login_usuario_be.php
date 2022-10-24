<?php 

    session_start();

include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios2
     WHERE correo='$correo'  and contrasna='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        echo '
            <script>
                window.location = "../inicio.php"
            </script>
        ';
        exit();
    }else{
        echo '
            <script>
                alert ("Inicia session")
                window.location = "../index.php"
            </script>
        ';
         exit();
    }
?>
