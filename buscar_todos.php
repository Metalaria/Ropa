<?php

session_start();
if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{

$con = new mysqli('localhost', 'root', 'app.Root', 'prueba');
$busca = mysqli_query($con, "select id_user, descripcion from usuarios ");
    
    while ($f =  mysqli_fetch_array($busca)){
        echo $f ['id_user']. '&nbsp;'. '&nbsp;'.$f['descripcion']."<br/>" ; 
    }
    echo "<form name= 'form1' action='atras.php' method='POST' >
            <input type='submit' name='regresar' value='regresar' />
        </form>";
        }
?>
