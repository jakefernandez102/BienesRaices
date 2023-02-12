<?php

//Conectar la base de datos
include '../bienesraices_inicio/includes/config/database.php';
$db = conectarDB();


//Crear un email y un usuario
$email = 'j.ake102@hotmail.com';
$password = '123456789';
$passwordHass = password_hash($password, PASSWORD_DEFAULT);


//Query para crear usuario
$query = "INSERT INTO usuarios (email,password) VALUES ('$email','$passwordHass' )";




//Agregarlo a la base de datos  
mysqli_query($db, $query);