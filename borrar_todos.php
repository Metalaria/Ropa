<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
}else {
$con = new mysqli('localhost', 'root', '', 'ropa');

function makestring($array){
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

    $busca = mysqli_query($con, "select id_user from usuarios ");
    echo "<form action='borrar.php' method='post' enctype='multipart/form-data'>";
    while ($f =  mysqli_fetch_array($busca)){
        $user=makestring($f);
        echo "Usuario: <input type='checkbox' name='borrar_usuario[]' value='$user' />$user<br/>";
    }
    echo " <input type='submit' name='boton' value='eliminar' />";
    echo "</form>";
}
?>
