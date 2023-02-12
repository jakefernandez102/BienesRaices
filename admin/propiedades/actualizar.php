<?php
require '../../includes/funciones.php';
$auth = validarSesion();

if(!$auth){
    header('Location: /bienesraices_inicio/index.php');
}

//Validar la URL por ID valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

//validando para redireccionar a index
if (!$id) {
    header('Location: /bienesraices_inicio/admin/index.php');
}



//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//Consulta datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = $id";
$resultado = mysqli_query($db, $consulta);

$propiedad = mysqli_fetch_assoc($resultado);


//Consultatr para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


//Arreglo mensaje de errores
$errores = [];

$titulo =  $propiedad['titulo'];
$precio =  $propiedad['precio'];
$descripcion =  $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc =  $propiedad['wc'];
$estacionamiento =  $propiedad['estacionamiento'];
$vendedores_id =  $propiedad['vendedores_id'];
$creado = $propiedad['creado'];
$imagenPropiedad = $propiedad['imagen'];

// Imagen
$imagenes = '';

//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);
    $creado = date('y/m/d');

    //Imagen
    $imagenes = $_FILES['imagen'];

    //Validaciones
    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una decripcion y debe de tener al menos 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "Debes añadir un numero de habitaciones";
    }
    if (!$wc) {
        $errores[] = "Debes añadir un numero de baños";
    }
    if (!$estacionamiento) {
        $errores[] = "Debes añadir un numero de estacionamientos";
    }

    if (!$vendedores_id) {
        $errores[] = "Elige un vendedor";
    }


    //validar tamanho imagen
    $medida = 1000 * 1000; //1MB

    if ($imagenes['size'] > $medida) {
        $errores[] = 'La imagen es demasiado pesada';
    }


    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    //Revisar que el arreglo errores[] este vacio
    if (empty($errores)) {

        // Subida de archivos
        //Creando carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        //comprobando si hay una imagen asignada a la propiedad
        if ($imagenes['name']) {
            unlink($carpetaImagenes . $propiedad['imagen']);

            //Generando nombre unico de imagen
            $nombreImagen = str_contains($imagenes['name'], '.jpg') ? md5(uniqid(rand(), true)) . $imagenes['name']  : md5(uniqid(rand(), true)) . $imagenes['name'] . '.jpg';
    
            //subir la imagen
            move_uploaded_file($imagenes['tmp_name'], $carpetaImagenes . $nombreImagen);
        }else{
            $nombreImagen = $propiedad['imagen'];
        }


        //insertar en DB
        $query = "UPDATE propiedades SET titulo = '$titulo',precio = $precio, imagen = '$nombreImagen',
        descripcion = '$descripcion',habitaciones = $habitaciones,wc= $wc,
        estacionamiento = $estacionamiento,vendedores_id = $vendedores_id WHERE id = $id ";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        // //en caso de que sea correcto el query
        if ($resultado) {

            //redireccionar el usuario
            header('Location: /bienesraices_inicio/admin/index.php?resultado=2');
        }
    }
}

incluirTemplate('header',);
?>

<!-- main -->
<main class="contenedor seccion">
    <h1>Update Property</h1>

    <a href="../index.php" class="boton boton-verde">Back</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>

    <form method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>General Info</legend>

            <label for="titulo">Tittle</label>
            <input value="<?php echo $titulo ?>" require type="text" name="titulo" id="titulo" placeholder="Propety Tittle">

            <label for="precio">Price</label>
            <input value="<?php echo $precio ?>" require type="number" name="precio" id="precio" placeholder="Property Price">

            <label for="imagen">Pricture</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg">

            <img class="imagen-actualizar" src="/bienesraices_inicio/imagenes/<?php echo $imagenPropiedad ?>" alt="Imagen de la propiedad">

            <label for="descripcion"> Desciption</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Property Info</legend>

            <label for="habitaciones">Rooms</label>
            <input value="<?php echo $habitaciones ?>" require type="number" name="habitaciones" id="habitaciones" placeholder="ex: 3" min='1' max='9'>

            <label for="wc">WC</label>
            <input value="<?php echo $wc ?>" require type="number" name="wc" id="wc" placeholder="ex: 3">

            <label for="estacionamiento">Parking Lot</label>
            <input value="<?php echo $estacionamiento ?>" require type="number" name="estacionamiento" id="estacionamiento" placeholder="ex: 3">
        </fieldset>

        <fieldset>
            <legend>Vendor</legend>

            <label for="vendedores_id">Vendor</label>
            <Select require name="vendedores_id" id="vendedores_id">
                <option value="" selected disabled> - Select - </option>

                <?php while ($row = mysqli_fetch_assoc($resultado)) :  ?>
                    <option <?php echo $vendedores_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] . " " . $row['apellido']; ?></option>
                <?php endwhile;  ?>

            </Select>
        </fieldset>

        <input type="submit" class="boton boton-verde" value="Submit">
    </form>
</main>
<!-- end main -->


<?php incluirTemplate('footer') ?>