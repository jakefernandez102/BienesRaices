<?php
declare(strict_types= 1);

require 'includes/funciones.php';
incluirTemplate('header',$inicio =true);

?>

<!-- main -->
<main class="contenedor seccion">
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
</main>
<!-- end main -->

<!-- section 1 -->
<section class="seccion contenedor">
    <h2>Houses and Depts for sell</h2>
    
    <?php 
    $limite = 3;
    include 'includes/templates/anuncios.php'; 
    ?>

    <div class="alinear-derecha">
        <a href="ads.php" class="boton-verde">View All</a>
    </div>
</section>
<!-- end section 1 -->

<!-- seccion 2 -->
<section class="imagen-contacto">
    <h2>Find your Dreams House</h2>
    <p>Fill the contact form and an advisor will contact you soon.</p>
    <a href="contact.php" class="boton-amarillo-noblock">Contact Us</a>
</section>
<!-- end seccion 2 -->

<!-- seccion nuestro blog -->
<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Our Blog</h3>

        <!-- articulo 1 -->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada de blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entry.php">
                    <h4>Terrace on the roof of your house</h4>
                    <p class="informacion-meta">Written on: <span>20/10/2021</span> By: <span>Admin</span></p>

                    <p>
                        Piece of advice to build a terrace on the roof of your house with the best materials
                        and saving money.
                    </p>
                </a>
            </div>
        </article>
        <!-- end articulo 1 -->
        <!-- articulo 2 -->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada de blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entry.php">
                    <h4>Guide for your house decoration</h4>
                    <p class="informacion-meta">Written on: <span>20/10/2021</span> By: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide, learn how to combine furniture and
                        colors to give life to your space.
                    </p>
                </a>
            </div>
        </article>
        <!-- end articulo 2 -->
    </section>

    <section class="testimoniales">
        <h3>Testimonies</h3>
        <div class="testimonial">
            <blockquote>
                The staff behaved in an excellent way, very good attention and the house they offered me meets
                all my expectations.
            </blockquote>
            <p> - Jake Fernandez</p>
        </div>
    </section>
</div>
<!-- end seccion nuestro blog -->

<?php incluirTemplate('footer') ?>