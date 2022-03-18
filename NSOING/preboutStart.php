


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NSOING &mdash; Your NSO Site.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700" SameSite=None> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
   <!--  <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css"> -->
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
    
  </head>
  <body>
  
                                            <!-- MENU -->
  <?php 
  include("menu.php");
   $boutUser="";
   include("conexion.php");
   $sql1= "SELECT idLeage, idUser, name, photo FROM leage where idUser=?";
  $prepara1 = mysqli_prepare($conexion, $sql1);
  mysqli_stmt_bind_param($prepara1, "i", $idUser); 
  mysqli_stmt_execute($prepara1);
  mysqli_stmt_bind_result($prepara1, $idLeage, $idUser, $leageName, $leagePhoto);
  
  while(mysqli_stmt_fetch($prepara1)){
    
  }
  mysqli_stmt_close($prepara1);

  $sql= "SELECT idBout, bout, boutDate, photo, game, creator FROM bout where creator=?";
  $prepara = mysqli_prepare($conexion, $sql);
  mysqli_stmt_bind_param($prepara, "i", $idUser); 
  mysqli_stmt_execute($prepara);
  mysqli_stmt_bind_result($prepara, $idBout, $bout, $boutDate, $boutPhoto, $game, $creator);
  
  while(mysqli_stmt_fetch($prepara)){
    $boutUser=$boutUser.'<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300"><a href="tablero/tablero.php?id='.$idUser.'&idL='.$idLeage.'&idB='.$idBout.'" class="unit-9 "><div><img src="user/imagenes/bout/'.$boutPhoto.'" alt="'.$bout.'" class="image"></div><div class="unit-9-content"><h2>'.$bout.'</h2><span>'.$boutDate.'</span><span>Game'.$game.'</span></div></a></div>';
  }
  mysqli_stmt_close($prepara);
  
  mysqli_close($conexion);
?>
                                              <!-- PAGINA -->

    <div class="site-section">
      <form action="" method="POST">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
          <h2 class="mb-5">NSOING<span class="text-primary">.</span></h2>
          <p>Work for Today</p>
        </div>
        <div class="site-section-heading  mx-auto" data-aos="fade-up" data-aos-delay="100">
        <input type="hidden" id="hidIdUser" name="hidIdUser" value="<?=$idUser?>">
        <label class="titulo2">Leage: <span class="titulo1"><?=$leageName?></span></label>
        <img src="user/imagenes/leage/<?=$leagePhoto?>" alt="Leage Logo" width="150"></div>
        <div class="container">
          <div class="row">
            
          </div>
          <div class="row" id="rellenarBouts">
            <?php 
            echo $boutUser;
            ?>   
        </div>
      </div>

</form>
    </div>




                                  <!-- FIN PAGINA -->



  <?php include("footer.php") ?>

  <!-- <script src="js/jquery-3.3.1.min.js"></script>  -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <!-- <script src="js/circleaudioplayer.js"></script> -->

  <script src="js/main.js"></script>
    
  </body>
</html>