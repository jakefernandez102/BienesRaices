<?php
require 'includes/funciones.php';

incluirTemplate('header', );
?>
        <!-- main -->
        <main class="contenedor seccion">
            <h1>About Us</h1>
            <div class="contenido-nosotros">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/nosotros.webp" type="image/webp">
                        <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/nosotros.jpg" alt="Image about us">
                    </picture>
                </div>
                <div class="texto-nosotros">
                    <blockquote>
                        25 years of experience
                    </blockquote>

                    <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc
                        aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta,
                        nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus.
                        Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta
                        in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed
                        condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est.
                        Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet
                        convallis nisi.</p>
                    <p>Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque
                        ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue
                        quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt
                        odio fermentum vel. Nulla facilisi.</p>
                </div>
            </div>
        </main>
        <!-- end main -->
        <!-- section -->
        <section class="contenedor seccion">
            <h1>More About Us</h1>
            <!-- contenedor iconos -->
            <div class="iconos-nosotros">
                <!-- icono 1 -->
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="Icon Security" loading="la">
                    <h3>Security</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio odit neque fugit quibusdam,
                        beatae ullam officia, mollitia culpa animi, magnam nam at. Est esse maiores autem libero
                        officiis magni?</p>
                </div>
                <!-- end icono 1 -->
                <!-- icono 2 -->
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="Icon Price" loading="la">
                    <h3>Price</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio odit neque fugit quibusdam,
                        beatae ullam officia, mollitia culpa animi, magnam nam at. Est esse maiores autem libero
                        officiis magni?</p>
                </div>
                <!-- end icono 2 -->
                <!-- icono 3 -->
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="Icon  on Time" loading="la">
                    <h3>On Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio odit neque fugit quibusdam,
                        beatae ullam officia, mollitia culpa animi, magnam nam at. Est esse maiores autem libero
                        officiis magni?</p>

                </div>
                <!-- end icono 3 -->
            </div>
            <!-- end contenedor iconos -->
        </section>
        <!-- end section -->
        
        <?php incluirTemplate('footer') ?>