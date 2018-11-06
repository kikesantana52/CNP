<?php
  include '../main/conexion.php';

  $name = $_POST['name'];
  $ap_p = $_POST['ap_p'];
  $ap_m = $_POST['ap_m'];

  $sql = "insert into employees(name,ap_p,ap_m) value ('".$name."','".$ap_p."','".$ap_m."')";
  $query = $con->query($sql);
  if($query!=null){
    echo "Agregado exitosamente.";
  }else{
    echo "Error";
  }
 ?>
