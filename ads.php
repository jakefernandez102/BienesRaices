<?php
require 'includes/funciones.php';

incluirTemplate('header',);
?>

<!-- main -->
<main class="contenedor seccion">

    <h2>Houses and Depts for sell</h2>

    <?php 
    $limite = 10;
    include 'includes/templates/anuncios.php'; 
    ?>


</main>
<!-- end main -->




<?php 
//cerrar conexion
mysqli_close($db);

incluirTemplate('footer') ?>