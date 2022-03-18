<?php 
include("db/conexion.php");
GLOBAL $idUser, $userName;
if(isset($_GET["id"])){
  $loginId=$_GET["id"];


  
  $sql1 = "SELECT `idUser`,`userName`, `birthDate` FROM `user` WHERE idUser=?";
  $preparada1= mysqli_prepare($conexion, $sql1);
  mysqli_stmt_bind_param($preparada1, "i", $loginId); 
  if($preparada1){
  mysqli_stmt_execute($preparada1);
  mysqli_stmt_bind_result($preparada1,$idUser,$userName,$birthDate);
  while(mysqli_stmt_fetch($preparada1)){
    if($birthDate==NULL){
      //TEAM MANAGER
      $actualizar="/nsoing/user/managerUpdate.php?id=$idUser";
      $curricular="";
      $equipar="/nsoing/user/userTeam.php?id=$idUser";
    }else{
      //REF NSO
      $actualizar="/nsoing/user/userUpdate.php?id=$idUser";
      $curricular='<li><a href="#">Curriculum</a></li>';
      $equipar="";
    }
  }
  mysqli_stmt_close($preparada1);
  }
 mysqli_close($conexion);
}
 ?>

<div class="site-wrap">
  <div class="site-navbar mt-4">
    <div class="container py-1">
      <div class="row align-items-center justify-content-around">
        <nav class="site-navigation navbar fixed-top text-left text-md-left" role="navigation">
          <div class="col-2">
          </div>
          <div class="col-8 col-md-8 col-lg-5">
          <h1 class="mb-0"><a href="/nsoing/indexUser.php?id=<?=$idUser?>" class="text-white h2 mb-0"><strong>NSOING<span class="text-primary">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-5">
            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
            </div>
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li><a href="/nsoing/indexUser.php?id=<?=$idUser?>">Home</a></li>
              <li><a href="/nsoing/preboutAccion.php?id=<?=$idUser?>">Bouts</a></li>
              <li><a href="#">Stats</a></li>
              <li class="has-children">
                <a href="#"><?= $userName ?></a>
                <ul class="dropdown arrow-top">
                  <?php echo$curricular ?>
                  <li><a href="<?= $actualizar ?>">Update</a></li>
                  <li><a href="<?= $equipar ?>">Teams</a></li>

                  <li><a href="#">Close Session</a></li>                      
                </ul>
              </li>
              <li><img src="/nsoing/img/logo/logo21.svg" alt="NSOING" id="logo-nav"></li>
            </ul>              
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

