
  if(isset($_POST["btnLogin"])){
    $userUser=$_POST["txtUser"];
    $userPassword=$_POST["txtPassword"];
       
    $sql1 = "SELECT `idUser`,`userName`, `password` FROM `user` WHERE username=?";
    $preparada1= mysqli_prepare($conexion, $sql1);
    mysqli_stmt_bind_param($preparada1, "i", $userUser); 
    if($preparada1){
      mysqli_stmt_execute($preparada1);
      mysqli_stmt_bind_result($preparada1,$idUser,$userName,$password);
      while(mysqli_stmt_fetch($preparada1)){
        echo("dbusuario".$userName."dbpass".$password);
      }
      mysqli_stmt_close($preparada1);
    }
    echo("usuario".$userUser."pass".$userPassword);
    echo("dbusuario".$userName."dbpass".$password);
    $pasahitza= $userPassword;
    //password_hash($userPassword, PASSWORD_ARGON2I);
    // $pasahitza= (string) $pasahitza;
    if($password==$pasahitza){
      //se logeo correctamente
      header("Location: indexUser.php?id=$idUser");
    }else{
      $errorea=("usuario".$userUser."pass".$userPassword."dbusuario".$userName."dbpass".$password);
       header("Location: index.php?errorea=$errorea");
      echo "Incorrect Password";

    }

  }
mysqli_close($conexion);
$pasahitza="";
$password="";
$userPassword="";

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NSOING &mdash; Your NSO Site.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700" SameSite=None> 
    

    
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-login.css">
    
    
  </head>
  <body>
  
                                            <!-- MENU -->
  
 <?php 
  include("menuPublic.php") 
 ?>


                                              <!-- PAGINA -->

    <div class="site-blocks-cover overlay" style="background-image: url('img/logo/logo211.svg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="1000">
            <h1 class="mb-4">Your NSO site<span class="text-primary">.</span></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Made from Skaters for Skaters</h2>
            <p>Roller Derby App for NSO's.</p>
            <p>Server for Rosters and Stats.</p><p></p>
            <p>Automatic Stats.</p><p></p>
            <p>Show Your NSO Curriculum.</p><p></p>
            <p>Add the bouts to your Curriculum.</p>
          </div>
        </div>  
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url('img/logo/logo21.svg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up">
          <div class="col-5">
            <h3 class="site-section-heading mb-4">Subscribe to Our Newsletter!</h3>
              <form action="#" method="post" class="site-block-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter your email"aria-label="Enter Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Subscribe</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      
          <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
                  <h2 class="mb-5">Upcoming App's</h2>
                  
                    <p>NSOING.</p><p></p>
                    <p>The Web App for the NSO's.</p><p></p>
                    <p>You want to try it?</p><p></p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Contact Us!</a></p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    


        
    
       



     <div class="site-section bg-black block-13" >
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">FOLLOW US!</h2>
          </div>
        </div>
        <div class="row">
          
          <div class="text-center p-3 p-md-5 col-4">
            <div class="mb-4">            
              <img src="img/logo/logo21.svg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-white">
              <h3 class="font-weight-light h5">Facebook</h3>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 col-4">
            <div class="mb-4">            
              <img src="img/logo/logo21.svg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-white">
              <h3 class="font-weight-light h5">Instagram</h3>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 col-4">
            <div class="mb-4">            
              <img src="img/logo/logo21.svg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-white">
              <h3 class="font-weight-light h5">Twitter</h3>
            </div>
          </div>

          
        </div>
      </div>
    </div> 


<div id="modalLogin" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">

      <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="user_card cuerpo">
            <div class="d-flex justify-content-center">
              <div class="brand_logo_container">
                <img src="/nsoing/img/logo/logo21.svg" class="brand_logo" alt="Logo">
              </div>
            </div>
        
            <div class="d-flex justify-content-center form_container">
              <form action="<?= $_SERVER['PHP_SELF']?>" method="POST" >
                <div class="input-group mb-3">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name="txtUser" id="txtUser" class="form-control input_user" placeholder="username">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="txtPassword" id="txtPassword" class="form-control input_pass" placeholder="password">
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                  </div>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                  <input type="Submit" name="btnLogin" id="btnLogin" class="btn login_btn" value="Log In">
                </div>
              </form>
            </div>
        
            <div class="mt-4">
              <div class="d-flex justify-content-center links">
                Don't have an account? <a href="/nsoing/user/userAukera.php" class="ml-2">Sign Up</a>
              </div>
              <div class="d-flex justify-content-center links">
                <a href="#">Forgot your password?</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>








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
