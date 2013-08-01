<?php
$con = new mysqli('localhost', 'root', '', 'ropa');

$prenda = $_POST['borrar_usuario[]'];

echo "<form action='modificando.php' method='post' enctype='multipart/form-data'>
                Usuario de la prenda:<input type='text' name='user' value='' /><br/>
                Tipo de la prenda:<input type='text' name='tipo' value='' /><br/>
                <input type='submit' name='boton' value='modify' />
        </form>";

$user = $_POST['user'];
$tipo = $_POST['tipo'];

$query = "update prendas set pren_usuario = '$user', pren_tipo = '$tipo'
    where id_prendas = '$prenda' ";
mysqli_query($con, $query)
?>
