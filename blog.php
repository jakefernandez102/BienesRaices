<?php
require 'includes/funciones.php';

incluirTemplate('header', );
?>

    <!-- main -->
    <main class="contenedor seccion">
        <h1>Our Blog</h1>

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
                    <p>Written on: <span>20/10/2021</span> By: <span>Admin</span></p>

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
                    <p>Written on: <span>20/10/2021</span> By: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide, learn how to combine furniture and
                        colors to give life to your space.
                    </p>
                </a>
            </div>
        </article>
        <!-- end articulo 2 -->
        <!-- articulo 3 -->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto entrada de blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entry.php">
                    <h4>Terrace on the roof of your house</h4>
                    <p>Written on: <span>20/10/2021</span> By: <span>Admin</span></p>

                    <p>
                        Piece of advice to build a terrace on the roof of your house with the best materials
                        and saving money.
                    </p>
                </a>
            </div>
        </article>
        <!-- end articulo 3 -->
        <!-- articulo 4 -->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto entrada de blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entry.php">
                    <h4>Guide for your house decoration</h4>
                    <p>Written on: <span>20/10/2021</span> By: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide, learn how to combine furniture and
                        colors to give life to your space.
                    </p>
                </a>
            </div>
        </article>
        <!-- end articulo 4 -->
    </main>
    <!-- end main -->

    <?php incluirTemplate('footer') ?>