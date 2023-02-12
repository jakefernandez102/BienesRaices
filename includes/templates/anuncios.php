<?php



//conctar la base de datos
require __DIR__ . '/../config/database.php';

$db = conectarDB();

//consultar la base de datos
$query = "SELECT * FROM propiedades LIMIT $limite";

//obtener resultados de la bd
$resultado = mysqli_query($db, $query);

?>



<div class="contenedor-anuncios ">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) :  ?>
        <!-- card 1 -->
        <div class="anuncio">

            <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="Image announcement 1">


            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>


                <p class="precio">$<?php echo $propiedad['precio']; ?></p>
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

                <div class="div-btn">
                    <a href="/../bienesraices_inicio/ad.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-amarillo">
                        View Property
                    </a>
                </div>
            </div>

        </div>
        <!-- end card 1 -->
    <?php endwhile; ?>

</div>

<?php
//Cerrar la conexion


?>