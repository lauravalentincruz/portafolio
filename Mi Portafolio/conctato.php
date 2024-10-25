<?php
require './includes/header.php';
?>
<h1>Contactanos</h1>
<main>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Digite todos sus datos</legend>

            <div class="campos">

                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" placeholder="digite nombre completo" required autofocus>
                </div>

                <div class="campo">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="Telefono" id="Telefono" placeholder="+57 3xxxxxx">
                </div>
                <div class="campo">
                    <label for="email">Email</label>
                    <input type="text" name="Email" id="Email" placeholder="correo@correo.com">
                </div>
                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="Mensaje"></textarea>
                </div>
            </div>

            <div>
                <input type="submit" class="btn">
            </div>

        </fieldset>

    </form>

</main>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['Nombre'];
    $telefono = $_POST['Telefono'];
    $email= $_POST['Email'];
    $mensaje = $_POST['mensaje'];

    try{
        
        require __DIR__ . '/includes/conexion_bd.php'; // Asegúrate de que __DIR__ esté bien escrito
        $sql= "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$email', '$mensaje'); ";
        $query= mysqli_query($coneccion, $sql);
        
    } catch (\Throwable $th) {
        var_dump($th);
    }
    
    
}

include __DIR__ . '/includes/footer.php';
?>
