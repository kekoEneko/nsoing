<?php 
include("db/conexion.php");

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
      }
      mysqli_stmt_close($preparada1);
    }
    $pasahitza= $userPassword;
    //password_hash($userPassword, PASSWORD_ARGON2I);
    // $pasahitza= (string) $pasahitza;
    echo "<br>".$password;
    echo "<br>".$pasahitza;
    if($password==$pasahitza){
      echo "se logeo correctamente";
    }else{
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-login.css">
    
    
  </head>
  <body>
  



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