<?php

include('db.php');



$ID=$_POST['id'];
mysqli_query($conexion,"DELETE FROM datos where ID='$ID'")or die("ERROR DE ELIMINAR");


mysqli_close($conexion);

header("location:mostrar.php");

?>