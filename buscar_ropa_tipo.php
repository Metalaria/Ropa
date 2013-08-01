<?php


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
   
    $busca = mysqli_query($con, " SELECT id_prendas, pren_tipo FROM prendas WHERE
        pren_tipo LIKE '%$busqueda%'"); 
    while ($f =  mysqli_fetch_array($busca)){
        echo $f ['id_prendas']. '&nbsp;'. '&nbsp;'.$f['pren_tipo']."<br/>" ; 
    }
    echo "<form name= 'form1' action='atras_cliente.php' method='POST' >
            <input type='submit' name='regresar' value='regresar' />
        </form>";
 
}

if (empty($_POST['busqueda'])) {
     echo "No ha itroducido nada para buscar";
    header('refresh: 3; url= buscar.php');
} 
}      
?>
