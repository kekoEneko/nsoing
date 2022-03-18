<?php 
$host = "localhost";
$dbuser = "nsoing";
$dbpwd = "1234nso1234";
$db = "nsoing";

$conexion = mysqli_connect($host, $dbuser, $dbpwd, $db);
if(mysqli_connect_errno()){
    echo ('No se ha podido conectar');
    exit(); //die();
}
?>