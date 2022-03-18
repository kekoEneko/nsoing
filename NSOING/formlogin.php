<?php 
 $host = "85.87.89.169";
$dbuser = "nsoing";
$dbpwd = "1234nso1234";
$db = "nsoing";

$conexion = mysqli_connect($host, $dbuser, $dbpwd, $db);
if(mysqli_connect_errno()){
    echo ('No se ha podido conectar');
    exit(); //die();
}else{
  echo("se ha conectado")
}

  if(isset($_POST["btnSubmit"])){
    $userUser=$_POST["txtUser"];
    $userPassword=$_POST["txtPassword"];


$sql1 = "SELECT `idUser`,`userName`, `password` FROM `user` WHERE username=?";
  $preparada1= mysqli_prepare($conexion, $sql1);
  mysqli_stmt_bind_param($preparada1, "i", $username); 
  if($preparada1){
  mysqli_stmt_execute($preparada1);
  mysqli_stmt_bind_result($preparada1,$idUser,$userName,$password);
  while(mysqli_stmt_fetch($preparada1)){
  }
  mysqli_stmt_close($preparada1);
  }
  // $pasahitza= password_hash($userPassword, PASSWORD_ARGON2I);
 if($password==$pasahitza){
  echo "se logeo correctamente";
 }else{
  echo"eres tonto colega";
  
 }

  }
mysqli_close($conexion);
 ?>