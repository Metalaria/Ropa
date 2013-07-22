<?php

session_start();

        if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        }else {
        echo "<form action='modificar_ropa.php' method='post' enctype='multipart/form-data'>
                Id de la prenda:<input type='text' name='busqueda' value='' /><br/>
                <input type='submit' name='boton' value='buscar' />
        </form>";
        
        echo "<form action='buscar_ropa_tipo.php' method='post' enctype='multipart/form-data'>
                Tipo de prenda:<input type='text' name='busqueda' value='' /><br/>
                <input type='submit' name='boton' value='buscar' />
        </form>";
        
        echo "<form action='buscar_todos.php' method='post' enctype='multipart/form-data'>
            
            <input type='submit' name='todos' value='Todas las prendas' /><br/>
            
        </form>";
        }
         ?>
        <a href='exito.php'>volver atr&aacute;s</a>
