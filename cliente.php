<?php
session_start();

        if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{
            echo "<p><a href='registrar.php'>a&ntilde;adir una prenda</a></p>
                <p><a href='buscar.php'>Modificar una prenda</a></p>
                <p><a href='buscador_ropa.php'>Buscar una prenda</a></p>
                <p><a href='eliminador_ropa.php'>Eliminar una prenda</a></p>
                <form name= 'form1' action='desconexion.php' method='POST' >
                    <input type='submit' name='salir' value='salir' />
                </form>";
        }
?>
