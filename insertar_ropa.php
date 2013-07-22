<?php
session_start();

        if (!isset($_SESSION['id_user'])) {
            echo 'No ha iniciado sesi&oacute;n';
            header('refresh: 3; url= index.php');   
        }else {
$con = new mysqli('localhost', 'root', '', 'ropa');
$cod = $_POST['cod'];
$tipo = $_POST['tipo'];
$user = $_SESSION['id_user'];

                  mysqli_query($con,"insert into prendas 
                      (pren_usuario,pren_codigo,pren_tipo)
                      values
                      ('$user','$cod','$tipo')")  ;
                  
	  	}
         
header('refresh: 3; url= cliente.php'); 
?>
