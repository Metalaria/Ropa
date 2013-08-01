<?php


session_start();
if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{

$con = new mysqli('localhost', 'root', '', 'ropa');
$busca = mysqli_query($con, "select id_prendas, pren_usuario, pren_codigo, pren_tipo
    from prendas ");
    
    while ($f =  mysqli_fetch_array($busca)){
        echo $f ['id_prendas']. '&nbsp;'. '&nbsp;'.$f['pren_usuario'].
                '&nbsp;'. '&nbsp;'.$f['pren_codigo'].
                '&nbsp;'. '&nbsp;'.$f['pren_tipo']."<br/>" ; 
    }
    echo "<form name= 'form1' action='atras_cliente.php' method='POST' >
            <input type='submit' name='regresar' value='regresar' />
        </form>";
        }

?>
