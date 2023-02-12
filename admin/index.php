<?php
require '../includes/funciones.php';
$auth = validarSesion();

if(!$auth){
    header('Location: /bienesraices_inicio/index.php');
}

//Importar la base de datos
require '../includes/config/database.php';
$db = conectarDB();

//escribir el query
$query = "SELECT * FROM propiedades";

//consultar la base de datos
$resultadoConsulta = mysqli_query($db, $query);


//mostrat los resultados
$resultado = $_GET['resultado'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        //Eliminar el archivo

        $query = "SELECT imagen FROM propiedades WHERE id = $id";

        $resultado = mysqli_query($db, $query);

        $propiedad = mysqli_fetch_assoc($resultado);
        unlink('../imagenes/' . $propiedad['imagen']);
        //Elimina la propiedad
        $query = "DELETE FROM propiedades WHERE id = $id";
        
        $resultado = mysqli_query($db, $query);
        
        if($resultado){
            header('Location: /bienesraices_inicio/admin/index.php?resultado=3');
        }
    }
}

incluirTemplate('header',);
?>

<!-- main -->
<main class="contenedor seccion">
    <h1>BienesRaices Admin</h1>
    <?php if ($resultado == 1) : ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php elseif ($resultado == 2) : ?>
        <p class="alerta exito">Anuncio actualizado correctamente</p>
    <?php elseif ($resultado == 3) : ?>
        <p class="alerta exito">Anuncio eliminado correctamente</p>
    <?php endif; ?>

    <a href="./propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">

        <thead>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!--mostrar resultados-->

            <?php

            while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img class="imagen-tabla" src="../imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen te propiedad"></td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td>

                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id'];  ?>" >
                                <input class="boton-rojo-block btn-acciones"  type="submit" value="Delete">
                        </form>

                        <a href="/bienesraices_inicio/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo btn-acciones">Update</a>
                    </td>
                </tr>           
            <?php endwhile; ?>
        </tbody>
    </table>
</main>
<!-- end main -->


<?php

//cerrar la conexion
mysqli_close($db);

incluirTemplate('footer') ?>