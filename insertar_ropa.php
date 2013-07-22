<?php
session_start();

        if (!isset($_SESSION['id_user'])) {
            echo 'No ha iniciado sesi&oacute;n';
            header('refresh: 3; url= index.php');   
        }else {
$con = new mysqli('localhost', 'root', '', 'ropa');
$img = $_POST['img'];
$cod = $_POST['cod'];
$tipo = $_POST['tipo'];
$user = $_SESSION['id_user'];
$path = 'fotos';

	  	// Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido
	  	if (file_exists('$path/' . $img)) {
	  	  echo $img . ' ya existe. ';
	  	} else {
	  	 // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida
	  	  move_uploaded_file($img,
	  	  '$path/' . $img);
	  	  echo 'Archivo Subido <br />';
                  $nombre_foto = $img;
                  $ruta = $path.'/' . $img;
                  mysqli_query($con,"insert into prendas 
                      (pren_usuario,pren_codigo,pren_tipo,pren_img_url, pren_img_nombre)
                      values
                      ('$user','$cod',$tipo,'$ruta','$nombre_foto' )")  ;
                  
	  	}
}
         
//header('refresh: 3; url= cliente.php'); 
?>
