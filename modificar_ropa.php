<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
}else {
$con = new mysqli('localhost', 'root', '', 'ropa');

if(empty($_REQUEST["borrar_prenda"])){
    echo "No ha introducido ning&uacute;n usuario"."<br/>";
}

if(isset($_REQUEST["borrar_usuario"])) {
    $q_borrar = "delete from prendas where id_prendas in ('" . implode("','", $_POST['borrar_prenda']) . "')";
    mysqli_query($con, $q_borrar)or die(mysqli_error());
    //echo "usuario borrado";
    header('refresh: 3; url= exito.php');
}

}
//$con = new mysqli('localhost', 'root', 'app.Root', 'prueba');

if(empty($_REQUEST["borrar_usuario"])){
    echo "No ha introducido ning&uacute;n usuario"."<br/>";
}
if(isset($_REQUEST["borrar_usuario"])) {
    $q_borrar = "delete from usuarios where id_user in ('" . implode("','", $_POST['borrar_usuario']) . "')";
    mysqli_query($con, $q_borrar)or die(mysqli_error());
    //echo "usuario borrado";
    header('refresh: 3; url= exito.php');
}
?>
