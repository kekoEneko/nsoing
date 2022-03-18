<?php 
GLOBAL $nuevoNombre;
// include("../db/conexion.php") ?>
<?php 
  if(isset($_GET["id"])){
    $loginId=$_GET["id"];
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NSOING &mdash; Your NSO Site.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700" SameSite=None> 
    <link rel="stylesheet" href="/nsoing/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/nsoing/css/bootstrap.min.css">
    <script src="/nsoing/js/jquery-3.4.1.min.js"></script>
   <!--  <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css"> -->
    
  
    <link rel="stylesheet" href="/nsoing/css/aos.css">

    <link rel="stylesheet" href="/nsoing/css/style.css">
    
    
  </head>
  <body>
  
                                            <!-- MENU -->
  
<?php include("menu.php");
include("db/conexion.php");
include("user/formManagerSelect.php");


if(isset($_POST["btnSubmit"])){
// ARCHIVO
  $photoVieja=$_POST["hidPhotoVieja"];
  echo "PHOTOVIEJA: ".$photoVieja."<br/>";
// $ar=$_FILES["filLeage"]['file'];
// echo "AR:".$ar."<br/>";
  $idUser=$_POST["hidIdUser"];
  echo "IDUSER".$idUser."<br/>";
  if(file_exists ("user/imagenes/leage/".$photoVieja)){
      unlink("user/imagenes/leage/".$photoVieja);
      echo " se elimino <br/>";
    }else{
      echo("no se elimino <br/>");
    }
    
    if(isset($_FILES['filLeage'])){  
      $filTemp = $_FILES['filLeage']['tmp_name']; 
      $filNombre = $_FILES['filLeage']['name'];
      $filTam = $_FILES['filLeage']['size'];
      $filTipo = $_FILES['filLeage']['type'];
      $filNombreArr= explode(".",$filNombre); 
      $ext=strtolower(end($filNombreArr));
      $nuevoNombre= 'leage'.$idUser.'.'.$ext; 
      echo "NUEVONOMBRE: ".$nuevoNombre."<br/>";
      $permitidas=array('jpg','png','gif','jpeg');
      if(in_array($ext,$permitidas)){
        $directorio="imagenes/leage/";
        $destino=$directorio.$nuevoNombre;
        echo $filTam;
        if($filTam<'512000‬'){ //Tamaño maximo 500Kb.
          echo $filTam;
          if(move_uploaded_file($filTemp,$destino)){
            $mensaje="Se ha subido correctamente.";
          }else{
            $mensaje="No se ha podido subir el archivo.";
          }
        }else{
          $mensaje="Tamaño de archivo no permitido";
        }
      }else{
        $mensaje="Extension no permitida.";
      }
      echo $mensaje;
    }else{
    echo"no se cargo na!";
    $photo=$photoVieja;
  }
        //FIN ARCHIVO

}
?>  

                                              <!-- PAGINA -->



<div class="site-section">
  <div class="container-fluid">
    <form action="prueba.php?id=<?=$idUser?>" method="POST" enctype="multipart/form-data">
      <p>
        <input type="" id="hidIdUser" name="hidIdUser" value="<?=$idUser?>">
        <input type="file" id="filLeage" name="filLeage" class="form-control">
        <input type="hidden" id="hidPhotoVieja" name="hidPhotoVieja" value="<?=$photo?>">
      </p>
      <input type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary btn-propio btn-tab" value="Update">
    </form>
  </div>
</div>
</body>
</html>
