 <?php 
 include("db/conexion.php");
  $sql= "SELECT idCert, type, cert FROM certification";
  $prepara = mysqli_prepare($conexion, $sql);
  mysqli_stmt_execute($prepara);
  mysqli_stmt_bind_result($prepara, $idCert, $type, $cert);
   $certificationNso=[];
  while(mysqli_stmt_fetch($prepara)){
    $certificationNso[] = array(
              'idCert'=>$idCert,
              'type'=>$type,
              'cert'=>$cert
              );
  }
  mysqli_stmt_close($prepara);
  mysqli_close($conexion);
  echo json_encode($certificationNso);
?>



