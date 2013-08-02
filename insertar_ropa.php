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

function create_event($var){
(int)$var++;

for($i = 0; $i <=$var; $i++) {
    $event = $var;
return $event;
}
}
$execute = mysqli_query($con, "select event_identificador from eventos
    WHERE event_identificador=(SELECT MAX(event_identificador) FROM eventos)");
$row = mysqli_fetch_array($execute);
$var1 = $row['event_identificador'];

$evento = create_event($var1);
                  mysqli_query($con,"insert into eventos 
                      (event_identificador, event_descripcion)
                      values
                      ($evento, 'Prenda insertada')")  ;
                  mysqli_query($con,"insert into prendas 
                      (pren_usuario,pren_codigo,pren_tipo, pren_evento)
                      values
                      ('$user','$cod','$tipo', $evento)")  ;
                  
                  echo "Prenda insertada con &eacute;xito";
	  	}
         
header('refresh: 3; url= cliente.php'); 
?>
