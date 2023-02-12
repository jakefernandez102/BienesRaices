<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);



if (!$id) {
    header('Location: /bienesraices_inicio/index.php');
}

//conecta la base de datos
require 'includes/config/database.php';

$db = conectarDB();

//consultar bd
$query = "SELECT * FROM propiedades WHERE id = $id;";


//obtener resultados de bd
$resultado =  mysqli_query($db, $query);

$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';

incluirTemplate('header');
?>

<!-- main -->
<main class="contenedor seccion contenido-centrado contenido-ad">
    <h1><?php echo $propiedad['titulo']; ?></h1>

    <img loading="lazy" src="/../bienesraices_inicio/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Image announcement 1">


    <div class="resumen-propiedad">
        <p class="precio">$<?php echo number_format($propiedad['precio']) ; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono-anun" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad['wc']; ?></p>
            </li>
            <li>
                <img class="icono-anun" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono recamaras">
                <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono-anun" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
        </ul>
        <p><?php echo $propiedad['descripcion']; ?></p>
    </div>
</main>
<!-- end main -->

<?php
mysqli_close($db);
incluirTemplate('footer') ?>