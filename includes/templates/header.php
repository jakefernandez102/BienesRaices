<?php

if (!isset($_SESSION)) {
    session_start();
}
// var_dump($_SESSION);
$auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesraices_inicio/build/css/app.css">
</head>

<body>
    <!-- header -->
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <!-- end barra -->
                <a href="/bienesraices_inicio/index.php">
                    <img src="/bienesraices_inicio/build/img/logo.svg" alt="Logo del sitio">
                </a>
                <!-- barra -->

                <div class="mobile-menu">
                    <img src="/bienesraices_inicio/build/img/barras.svg" alt="iconos menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesraices_inicio/build/img/dark-mode.svg" alt="Boton de claro/oscuro">
                    <!-- nav -->
                    <nav class="navegacion">
                        <a href="/bienesraices_inicio/aboutus.php">About Us</a>
                        <a href="/bienesraices_inicio/ads.php">Ads</a>
                        <a href="/bienesraices_inicio/blog.php">Blog</a>
                        <a href="/bienesraices_inicio/contact.php">Contact</a>
                        <?php if (!$auth) : ?>
                            <a href="/bienesraices_inicio/login.php">Signin</a>
                        <?php else : ?>
                            <a href="/bienesraices_inicio/admin/index.php">Admin</a>
                            <a href="/bienesraices_inicio/logout.php">Signout</a>
                        <?php endif; ?>
                    </nav>
                    <!-- endnav -->
                </div>

            </div>

            <?php echo $inicio ? "<h1>Sell of Houses and Luxury Departments</h1>" : ''; ?>
        </div>
    </header>
    <!-- end header -->