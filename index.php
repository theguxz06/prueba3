<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login y register</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesíon</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Aún no tengo una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__register">Registrarse</button>
                </div>
            </div>

            <!--Formulario de login y register-->
            <div class="contenedor__login-register">

                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">

                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico"  name="correo">
                    <input type="password" placeholder="Contraseña"  name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo" >
                    <input type="text" placeholder="Usuario" name="usuario" >
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>

            </div>

        </div>

    </main>
    <script src="js/script.js" ></script>
</body>
</html>
<?php
?>