<?php include("conexion.php") ?>
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
  
  <?php include("menu.php") ?>
    


                                              <!-- PAGINA -->
<?php 

  if(isset($_POST["btnSubmit"])){

      $username=$_POST["txtUser"];
      $password=$_POST["txtPassword"];
      $password1=$_POST["txtRePassword"];
      $email=$_POST["txtEmail"];
      $birthDate=$_POST["txtDate"];
      $country=$_POST["txtCountry"];
      $premium=False;
      $sql1 = "INSERT INTO `user`(`userName`, `email`, `birthDate`, `country`, `premium`) VALUES (?,?,?,?,?)";
      $preparada1= mysqli_prepare($conexion, $sql1);
      mysqli_stmt_bind_param($preparada1, "ssssb", $username,$email,$birthDate,$country,$premium); //falta password
      mysqli_stmt_execute($preparada1);
      $nuevo_id=mysqli_insert_id($conexion);
      mysqli_stmt_close($preparada1);
      echo $nuevo_id;
      
        
        if(isset($_POST["nso"])){
          $idUser=$nuevo_id;
          $nsoRol=1;
          $nsoName=$_POST["txtNsoName"];
          $nsoPhoto=$_POST["txtNsoPhoto"];
          $nsoIdLeage=$_POST["txtNsoLeage"];
          $nsoCurri=$_POST["txtNsoCurri"];
          $nsoCert=$_POST["selNsoCert"];

          $sql2 = "INSERT INTO `rol`(`idUser`, `rol`, `name`, `photo`, `idLeage`, `curriculum`, `idCert`) VALUES (?,?,?,?,?,?,?)";
          $preparada2= mysqli_prepare($conexion, $sql2);
          mysqli_stmt_bind_param($preparada2, "iississ", $idUser, $nsoRol,$nsoName,$nsoPhoto,$nsoIdLeage,$nsoCurri,$nsoCert); 
          mysqli_stmt_execute($preparada2);
          mysqli_stmt_close($preparada2);
        }
        if(isset($_POST["ref"])){
          $idUser=$nuevo_id;
          $refRol=2;
          $refName=$_POST["txtRefName"];
          $refCert=$_POST["selRefCert"];
          $refPhoto=$_POST["txtRefPhoto"];
          $refCurri=$_POST["txtRefCurri"];
          $refleage=$_POST["txtRefLeage"];

          $sql3 = "INSERT INTO `rol`(`idUser`, `rol`, `name`, `photo`, `idLeage`,`curriculum`, `idCert`) VALUES (?,?,?,?,?,?,?)";
          $preparada3= mysqli_prepare($conexion, $sql3);
          mysqli_stmt_bind_param($preparada3, "iisssiiisi", $iduser,$refrol,); 
          mysqli_stmt_execute($preparada3);
          mysqli_stmt_close($preparada3);


        }
        if(isset($_POST["manager"])){
          $idUser=$nuevo_id;
          $manRol=3;
          $manName=$_POST["txtManagerName"];
          $manPhoto=$_POST["txtManagerPhoto"];
          $manLeage=$_POST["txtManagerLeage"];

          $sql4 = "INSERT INTO `rol`(`idUser`, `rol`, `name`, `photo`, `idLeage`) VALUES (?,?,?,?,?)";
          $preparada4= mysqli_prepare($conexion, $sql4);
          mysqli_stmt_bind_param($preparada4, "iisssiiisi", $idUser,); 
          mysqli_stmt_execute($preparada4);
          mysqli_stmt_close($preparada4);


           }
           if(isset($_POST["skater"])){
          $idUser=$nuevo_id;
          $skaterRol=4;
          $skaterName=$_POST["txtSkaterName"];
            $skaterPhoto=$_POST["txtSkaterPhoto"];
            $skaterIdLeage=$_POST["txtSkaterLeage"];
            $skaterTeam=$_POST["txtSkaterTeam"];
            $skaterNumber=$_POST["txtSkaterNumber"];
          $sql5 = "INSERT INTO `rol`(`idUser`, `rol`, `name`, `photo`, `idLeage`, `team`, `number`) VALUES (?,?,?,?,?,?,?)";
          $preparada5= mysqli_prepare($conexion, $sql5);
          mysqli_stmt_bind_param($preparada5, "iissiii", $idUser,$skaterRol,$skaterName,$skaterPhoto,$skaterIdLeage,$skaterTeam,$skaterNumber); 
          mysqli_stmt_execute($preparada5);
          mysqli_stmt_close($preparada5);
         
        }


   

mysqli_close($conexion);
    }
 ?>  

    <div class="site-section">
        
      <div class="container-fluid">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5">User<span class="text-primary">.</span></h2>
            <p></p>
          </div>
        </div>
        <div class="row form-group justify-content-center">
          <div class="col-4" data-aos="fade-up" data-aos-delay="300">
            <div class="row align-items-bottom justify-content-around">
              <div class="col-5">
                <p><label for="txtUser" class="item-user-lbl mt-3">User </label></p>
                <p><label for="txtEmail" class="item-user-lbl item-user">Email </label></p>
                <p><label for="txtDate" class="item-user-lbl item-user">Birth Date </label></p>
                <p><label for="txtCountry" class="item-user-lbl item-user">Country</label></p>
                <p><label for="txtPassword" class="item-user-lbl item-user">Password <span class="text-mini"> (Number/Leter required)</span></label></p>
                <p><label for="txtRePassword" class="item-user-lbl item-user">Reentry Password </label></p>
                
              </div>
              <div class="col-7">
                <p><input type="text" id="txtUser" name="txtUser" class=" form-control" placeholder="min 8 character"/></p>
                <p><input type="email" id="txtEmail" name="txtEmail" class=" form-control" placeholder=/></p>
                <p><input type="date" id="txtDate" name="txtDate" class=" form-control" placeholder=/></p>
                <p><input type="text" id="txtCountry" name="txtCountry" class=" form-control" placeholder=/></p>
                <p><input type="password" id="txtPassword" name="txtPassword" class="form-control"/></p>
                <p><input type="password" id="txtRePassword" name="txtRePassword" class="form-control"/></p>
                <p><input type="submit" id="btnSubmit" name="btnSubmit"></p>
                
              </div>
              </div>
              <div class="row justify-content-around py-3">
                <div class="col-3 justify-content-center">
                  <div class="row justify-content-center"><input type="checkbox" id="chkNso" name="chkNso" class="item-user form-control chkTab"/></div>
                  <div class="row justify-content-center"><label for="chkNso" class="form-check-label">NSO</label></div>
                </div>
                <div class="col-3 justify-content-center">
                  <div class="row justify-content-center"><input type="checkbox" id="chkRef" name="chkRef" class="item-user form-control chkTab"/></div>
                  <div class="row justify-content-center"><label for="chkRef" class="form-check-label">Referee</label></div>
                </div>
                <div class="col-3 justify-content-center">
                  <div class="row justify-content-center"><input type="checkbox" id="chkTeam" name="chkTeam" class="item-user form-control chkTab"/></div>
                  <div class="row justify-content-center"><label for="chkTeam" class="form-check-label">Team Manager</label></div>
                  </div>
                <div class="col-3 justify-content-center">
                  <div class="row justify-content-center"><input type="checkbox" id="chkSkater" name="chkSkater" class="item-user form-control chkTab"/></div>
                  <div class="row justify-content-center"><label for="chkSkater" class="form-check-label">Skater</label></div>
                </div>
              </div>

            </div>
            <div class="col-3 form-group" data-aos="fade-up" data-aos-delay="500">
              <div class="row justify-content-center">
                <div class="col-10">
                
                  <div class="form-group bout-layer">        
                    <img src="img/logo/logo21.svg" alt="User" class="image">
                  </div> 
                </div>
              </div>
            </div>
          </div>
            
          <div class="row form-group justify-content-center">
            <div class="col-5 bout-layer" id="userNso" data-aos="fade-up" data-aos-delay="300">
              <p class="titulo1">NSO<span class="text-primary">.</span></p>
              <div class="row form-group">
                
                <div class="col-2">
                <p><label for="txtNsoName" class="item-user-lbl item-user">Derby Name</label></p>
                <p><label for="selNsoCert" class="item-user-lbl item-user">Certification Level</label></p>
                <p><label for="txtNsoPhoto" class="item-user-lbl item-user">Photo</label></p>
                <p><label for="txtNsoCurri" class="item-user-lbl item-user">Curriculum url</label></p>
                 <p><label for="txtNsoLeage" class="item-user-lbl item-user">Leage</label></p>
                
              </div>
              <div class="col-6">
                <p><input type="text" id="txtNsoName" name="txtNsoName" class="form-control"/></p>
                <p><select name="selNsoCert" id="selNsoCert" class="form-control">

                </select></p>
                <p><input type="file" id="txtNsoPhoto" name="txtNsoPhoto" class="form-control"/></p>
                <p><input type="text" id="txtNsoCurri" name="txtNsoCurri" class="form-control"/></p>
                <p><input type="text" id="txtNsoLeage" name="txtNsoLeage" class="form-control"/></p>
                
              </div>
              <div class="col-3 bout-layer">        
                    <img src="img/logo/logo21.svg" alt="User" class="image">
                  </div> 
              </div>
            </div>
            <div class="col-5 bout-layer" id="userRef" data-aos="fade-up" data-aos-delay="300">
              <p class="titulo1">Referee<span class="text-primary">.</span></p>
              <div class="row form-group">
                
                <div class="col-2">
                <p><label for="txtRefName" class="item-user-lbl item-user">Derby Name</label></p>
                <p><label for="selRefCert" class="item-user-lbl item-user">Certification Level</label></p>
                <p><label for="txtRefPhoto" class="item-user-lbl item-user">Photo</label></p>
                <p><label for="txtRefCurri" class="item-user-lbl item-user">Curriculum url</label></p>
                 <p><label for="txtRefLeage" class="item-user-lbl item-user">Leage</label></p>
                
              </div>
              <div class="col-6">
                <p><input type="text" id="txtRefName" name="txtRefName" class="form-control"/></p>
                <p><select name="selRefCert" id="seRefoCert" class="form-control">

                </select></p>
                <p><input type="file" id="txtRefPhoto" name="txtRefPhoto" class="form-control"/></p>
                <p><input type="text" id="txtRefCurri" name="txtRefCurri" class="form-control"/></p>
                <p><input type="text" id="txtRefLeage" name="txtRefLeage" class="form-control"/></p>
                
              </div>
              <div class="col-3 bout-layer">        
                    <img src="img/logo/logo21.svg" alt="User" class="image">
                  </div> 
              </div>
            </div>
            <div class="col-5" id="userTeam" data-aos="fade-up" data-aos-delay="300">
              <p class="titulo1">Team Manager<span class="text-primary">.</span></p>
              <div class="row form-group">
                
                <div class="col-4">
                <p><label for="txtManagerName" class="item-user-lbl item-user">Derby Name</label></p>
                <p><label for="txtManagerPhoto" class="item-user-lbl item-user">Photo</label></p>
                <p><label for="txtManagerLeage" class="item-user-lbl item-user">Leage</label></p>
                
                
              </div>
              <div class="col-8">
                <p><input type="text" id="txtManagerName" name="txtManagerName" class="form-control"/></p>
                <p><input type="file" id="txtManagerPhoto" name="txtManagerPhoto" class="form-control"/></p>
                <p><input type="text" id="txtManagerLeage" name="txtManagerLeage" class="form-control"/></p>
               
                
              </div>
              </div>
            </div>
            <div class="col-5" id="userSkater" data-aos="fade-up" data-aos-delay="300">
              <p class="titulo1">Skater<span class="text-primary">.</span></p>
              <div class="row form-group">
                
                <div class="col-4">
                <p><label for="txtSkaterName" class="item-user-lbl item-user">Derby Name</label></p>
                <p><label for="txtSkaterPhoto" class="item-user-lbl item-user">Photo</label></p>
                <p><label for="txtSkaterLeage" class="item-user-lbl item-user">Leage</label></p>
                <p><label for="txtSkaterTeam" class="item-user-lbl item-user">Team</label></p>
                <p><label for="txtSkaterNumber" class="item-user-lbl item-user">Number</label></p>
                
                
              </div>
              <div class="col-8">
                <p><input type="text" id="txtSkaterName" name="txtSkaterName" class="form-control"/></p>
                <p><input type="file" id="txtSkaterPhoto" name="txtSkaterPhoto" class="form-control"/></p>
                <p><input type="text" id="txtSkaterLeage" name="txtSkaterLeage" class="form-control"/></p>
                <p><input type="text" id="txtSkaterTeam" name="txtSkaterTeam" class="form-control"/></p>
                <p><input type="text" name="txtSkaterNumber" id="txtSkaterNumber" class="form-control"></p>                   <!-- Revisar numeros del equipo. Siempre unique! -->
                
              </div>
              </div>
            </div>

          </div>
        
        
                 </form>
      </div>
    </div>

    <script>
      $(document).ready(function(){
        console.log("ready!")
        comprobartabs();
        $(".chkTab").change(function(){
          comprobartabs();
        });
      
      });



function comprobartabs(){

        if ($("#chkNso").is(":checked"))
            $("#userNso").show(800);
          else
            $("#userNso").hide(800);

        if ($("#chkRef").is(":checked"))
            $("#userRef").show(800);
          else
            $("#userRef").hide(800);

        if ($("#chkTeam").is(":checked"))
            $("#userTeam").show(800);
          else
            $("#userTeam").hide(800);

        if ($("#chkSkater").is(":checked"))
            $("#userSkater").show(800);
          else
            $("#userSkater").hide(800);
        
}

    </script>




                                  <!-- FIN PAGINA -->



    <footer class="site-footer">
      
    </footer>

  </div>

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