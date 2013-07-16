<?php

use mysqli;
session_start();
if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{

$con = new mysqli('localhost', 'root', '', 'ropa');

$busqueda=$_POST['busqueda'] ;

//$all="";
//$all =$_POST['todos'] ;

if ($busqueda!=""){
   
    $busca = mysqli_query($con, " SELECT pren_tipo, descripcion FROM prendas WHERE
        pren_tipo LIKE '%$busqueda%'"); 
    while ($f =  mysqli_fetch_array($busca)){
        echo $f ['id_user']. '&nbsp;'. '&nbsp;'.$f['descripcion']."<br/>" ; 
    }
    echo "<form name= 'form1' action='atras.php' method='POST' >
            <input type='submit' name='regresar' value='regresar' />
        </form>";
 
}

if (empty($_POST['busqueda'])) {
     echo "No ha itroducido nada para buscar";
    header('refresh: 3; url= buscar.php');
} 
}      
?>
