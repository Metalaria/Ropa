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
        echo "<form action='busqueda.php' method='post' enctype='multipart/form-data'>
            Nombre de usuario: <input type='text' name='busqueda' value='' /><br/>
            
            <input type='submit' name='boton' value='buscar' />
        </form>";
        
        echo "<form action='buscar_todos.php' method='post' enctype='multipart/form-data'>
            
            <input type='submit' name='todos' value='buscar todos' /><br/>
            
        </form>";
        }
         ?>
        <a href='exito.php'>volver atr&aacute;s</a>
        
    </body>
</html>