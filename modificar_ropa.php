<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
} else {
$con = new mysqli('localhost', 'root', '', 'ropa');
$busqueda =""; 
$busqueda=$_POST['busqueda'] ;
$all="";
//$all =$_POST['todos'] ;
//$all =$_POST['borrar_todos'] ;
// funcion para convertir el contenido de un array en un string
function makestring($array)
  {
  $outval = '';
  if (is_array($array)) {
   foreach($array as $key=>$value)
    {
    if(is_array($value))
      {
      $outval = makestring($value);
      }
    else
      {
      $outval = $value;
      }
    }
}
  
  return $outval;
  }

if ($busqueda!=""){
    $busca = mysqli_query($con, " SELECT pren_codigo FROM prendas WHERE
        pren_codigo LIKE '%$busqueda%'");
    echo "<form action='modificando.php' method='post' enctype='multipart/form-data'>";
    while ($array= mysqli_fetch_array($busca)){
        $user=makestring($array);
            echo"Usuario: <input type='checkbox' name='borrar_usuario[]' value='$user' />$user<br/>";
    }
    echo " <input type='submit' name='boton' value='editar' />";
     
   echo "</form>";
}
else {
    echo "No ha itroducido nada para buscar";
    header('refresh: 3; url= cliente.php');
} 
}


?>
