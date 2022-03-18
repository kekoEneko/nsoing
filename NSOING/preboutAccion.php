<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NSOING &mdash; Your NSO Site.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700" SameSite=None> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

<link href="slide/bootstrap-slider.css" rel="stylesheet">

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
      
      <!-- slide
          
        <link href="slide/bootstrap-slider.css" rel="stylesheet">
        <script src="slide/bootstrap-slider.js"></script>
     -->
    
  </head>
  <body>
  
      <?php include("menu.php") ?>
    


                                              <!-- PAGINA -->

    <div class="site-section">
      <div class="container">
        <div class="row" >
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5">Bouts<span class="text-primary">.</span></h2>
            <p id="work">Work for Today</p>
          </div>
        </div>

        <div class="row" id="selecciona" >
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="prebout.php?id=<?=$idUser?>" class="unit-9">
              <div class="image" style="background-image: url('img/logo/logo21.svg');"></div>
              <div class="unit-9-content">
                <h2>Create a New Bout</h2>
                <span>New From Blank.</span>
                <!-- <span>with Wendy Matos</span> -->
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="preboutModify.php?id=<?=$idUser?>" class="unit-9" >
              <div class="image" style="background-image: url('img/logo/logo21.svg');"></div>
              <div class="unit-9-content">
                <h2>Modify Existing Bout</h2>
                <span>Modify the PreBout.</span>
                <!-- <span>with Gaby Tenda</span> -->
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="preboutStart.php?id=<?=$idUser?>" class="unit-9" >
              <div class="image" style="background-image: url('img/logo/logo21.svg');"></div>
              <div class="unit-9-content">
                <h2>Start a Bout</h2>
                <span>Confirm PreBout and Start.</span>
                <!-- <span>with Gaby Tenda</span> -->
              </div>
            </a>
          </div>
          
        </div>




      </div>
    </div>

       

<script> 


  function cargarSliders(){
    $("#rngRef").bootstrapSlider();

      //$("#rngRef").slider({ min: 4, max: 9, value: 7, handle:'square'});
  //  https://www.jqueryscript.net/form/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider.html

  }
  $(document).ready(function(){

  $("#rngRef").change(function(){
    $("#spRef").text($("#rngRef").value())

  });


    cargarSliders();
    

    $("#btnPlantilla").click(function(){
      $("#plantilla").show(800);
      $("#selecciona").hide(800);
      $("#work").hide(800);
    });
    $("#btnPersonaliza").click(function(){
      $("#plantilla").hide(800);
      $("#personaliza").show(800);
      


                                            
    });


  
   
  
  });


 
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
  <!-- <script src="js/circleaudioplayer.js"></script> 
  <link href="slide/bootstrap-slider.css" rel="stylesheet">
  <script src="slide/bootstrap-slider.js"></script>
-->
<script src="slide/bootstrap-slider.js"></script>
  <script src="js/main.js"></script>
  <!-- slide -->
          

    
  </body>
</html>