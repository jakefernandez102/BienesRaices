<?php
require 'includes/funciones.php';

incluirTemplate('header', );
?>

        <!-- main -->
        <main class="contenedor seccion">
            <h1>Contacts</h1>

            <picture>
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <source srcset="build/img/destacada3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada3.jpg" alt="Image contact">
            </picture>

            <h2>Fill the contact form:</h2>

            <!-- formulario -->
            <form class="formulario" action="">
                <fieldset>
                    <legend>Personal Information</legend>

                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Your Name">

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" placeholder="Your E-mail">

                    <label for="tel">Phone NUmber:</label>
                    <input type="tel" id="tel" placeholder="Your Phone Numer">

                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </fieldset>

                <fieldset>
                    <legend>Property Information</legend>

                    <label for="buysell">Sell or Buy:</label>
                    <select name="buysell" id="buysell">
                        <option value="" disabled selected> -Select- </option>
                        <option value="buy">Buy</option>
                        <option value="sell">Sell</option>

                    </select>

                    <label for="pricebudget">Price or Budget:</label>
                    <input type="number" id="pricebudget" min="0">
                </fieldset>

                <fieldset>
                    <legend>Contact Information</legend>

                    <p>Contact Method</p>

                    <div class="forma-contacto">
                        <label for="methodtel">by Phone:</label>
                        <input name="contact" type="radio" id="methodtel">
                        <label for="methodemail">E-mail:</label>
                        <input name="contact" type="radio" id="methodemail">
                    </div>

                    <p>If you chose by Phone, define the date and hour</p>

                    <label for="date">Date:</label>
                    <input type="date" id="date">

                    <label for="hour">Hour:</label>
                    <input type="time" itemref="time" min="09:00" max="18:00">

                </fieldset>

                <input type="sub" name="submir" id="submit" class="boton-verde" value="Submit">
            </form>
            <!-- end formulario -->

        </main>
        <!-- end main -->


        <?php incluirTemplate('footer') ?>