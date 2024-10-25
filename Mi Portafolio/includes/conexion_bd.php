<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'ROOT';
    $bd = 'portafolio';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
echo('conexion a la base de datos exitosa');
} catch (\Throwable $th) {
    var_dump($th);
}