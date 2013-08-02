<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
}else {
$con = new mysqli('localhost', 'root', '', 'ropa');

if(empty($_REQUEST["borrar_prenda"])){
    echo "No ha seleccionado ninguna prenda"."<br/>";
}
print_r($_REQUEST['borrar_prenda']);
if(isset($_REQUEST['borrar_prenda'])) {
    $q_borrar = "delete from prendas where id_prendas in ('" . implode("','", $_POST['borrar_prenda']) . "')";
    mysqli_query($con, $q_borrar)or die(mysqli_error());
    echo "prenda borrada";
    header('refresh: 3; url= cliente.php');
}

}
?>
