<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
         session_start();

        if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        }else {
       
       echo" <div>
            <form name= 'form1' action='insertar_ropa.php' method='POST' >
            c&oacute;digo de la prenda (obligatorio) <input type='textarea' name='cod' value='' /><br/>
            Tipo de prenda (obligatorio) <input type='textarea' name='tipo' value='' /><br/>   
            <input type='submit' name='guardar' value='guardar' /><br/>
            </form>
        </div> ";
        
        
       echo "<a href='registrar_ropa.php?opc=1'>¿Desea subir una imagen?</a><br/>";
       
       if (isset($_GET['opc']) and ($_GET['opc']==1)){   
        echo "<div>
            <form action='subida2.php' method='post' enctype='multipart/form-data'>
            c&oacute;digo de la prenda <input type='textarea' name='cod' value='' /><br/>
            <label for='file'>Sube una im&aacute;gen:</label>
            <input type='file' name='archivo' id='archivo' /> 
            <input type='submit' name='boton' value='Subir' />
        </form>
        </div>";
        }
        }
        echo "<a href='cliente.php'>volver atr&aacute;s</a> ";
                ?>
        
        
    </body>
</html>
