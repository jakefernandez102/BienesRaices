<?php

include '../bienesraices_inicio/includes/config/database.php';
$db = conectarDB();


//autenticar usuario

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = 'El email es obligatorio o no es valido';
    }
    if (!$password) {
        $errores[] = 'El password es obligatorio o no es valido';
    }

    if (empty($errores)) {

        //Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($db, $query);


        if ($resultado->num_rows) {

            //verificar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            //verificamos si el password es correcto o no con password_verify
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                
                //El usuario esta autenticado
                session_start();
                
                //llenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                
                header('Location: /bienesraices_inicio/admin/index.php');

                // echo "<pre>";
                // var_dump($_SESSION);
                // echo "</pre>";
            } else {
                $errores[] = 'El password es incorrecto';
            }
        } else {
            $errores[] = 'El usuario no existe';
        }
    }
}



//incluye el header
require 'includes/funciones.php';

incluirTemplate('header',);
?>

<!-- main -->
<main class="contenedor seccion contenido-centrado">
    <h1>Login</h1>

    <?php
    foreach ($errores as $error) :
    ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" novalidate>
        <fieldset>
            <legend>Your Credential</legend>

            <label for="email">E-mail:</label>
            <input required type="email" name="email" id="email" placeholder="Your E-mail">

            <label for="pass">Password:</label>
            <input required type="password" name="password" id="pass" placeholder="Your Password">

        </fieldset>

        <input type="submit" value="Login" class="boton boton-verde">
    </form>
</main>
<!-- end main -->


<?php incluirTemplate('footer') ?>