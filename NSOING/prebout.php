<?php 
include("db/conexion.php");
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
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php 
      include("menu.php");
    ?>


    <!-- PAGINA -->

    <div class="site-section">
      <form action="db/savePrebout.php" method="POST">
        <input type="hidden" id="hidIdUser" name="hidIdUser" value="<?=$loginId?>">
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
          <div class="row bout-layer" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12">
              <div class="row align-items-top justify-content-between" >
                <div class=col-3><p class="titulo0">PreBout<span class="text-primary">.</span></p></div>
                <div class="col-1"><a class="btn btn-dark btn-propio" id="btnTeam">Teams</a></div>
                <div class="col-1"><a class="btn btn-dark btn-propio" id="btnNso">&nbsp;&nbsp;NSO&nbsp;&nbsp;</a></div>
                <div class="col-1"><a class="btn btn-dark btn-propio" id="btnRef">Referee</a></div>
                <div class="col-1"><a class="btn btn-dark btn-propio" id="btnConfig" data-toggle="modal" data-target=".modalConfig">&nbsp;Config&nbsp;</a></div>
                <div class="col-1"><button type="Reset" class="btn btn-primary btn-propio" id="btnReset">Reset</button></div>
                <div class="col-2"><button type="Submit" class="btn btn-primary btn-propio col-12" id="btnSubmit" name="btnSubmit">Save</button></div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <div class="row bout-layer justify-content-around"data-aos="fade-up" data-aos-delay="100" >
                  <div class="col-12">
                    <div class="row justify-content-start">
                      <div class="col-4">
                        <label for="txtLocation" class="item-pre">Location </label><input type="text" class="item-pre col-12" id="txtLocation" name="txtLocation" placeholder="Location Name">
                      </div>
                      <div class="col-2">
                         <label for="txtCity" class="item-pre esconderBout">City </label><input type="text" class="item-pre col-12 esconderBout" id="txtCity" name="txtCity" placeholder="City">
                      </div>
                      <div class="col-2">
                        <label for="txtSt" class="item-pre esconderBout">State </label><input type="text" class="item-pre col-12 esconderBout" id="txtSt" name="txtSt" placeholder="State">
                      </div>
                      <div class="col-1">
                        <label for="txtGame" class="item-pre">Game </label><input type="text" class="item-pre col-12" id="txtGame" name="txtGame" placeholder="Game">
                      </div>
                      <div class="col-4">
                       <label for="txtBout" class="item-pre">Bout / Tournament </label><input type="text" class="item-pre col-12" id="txtBout" name="txtBout"  placeholder="Bout / Tournament">
                      </div>
                      <div class="col-2">
                        <label for="selLeage" class="item-pre esconderBout">Host Leage </label><select class="item-pre col-12 esconderBout" id="selLeage" name="selLeage">
                          <option value="-1">Select Leage</option>
                        </select>
                      </div>
                      <div class="col-2">
                        <label for="txtBoutDate" class="item-pre esconderBout">Day </label>
                        <input type="date" class="item-pre col-12 esconderBout" id="txtBoutDate" name="txtBoutDate">
                      </div>
                      <div class="col-1">
                        <label for="txtBoutTime" class="item-pre esconderBout">Time </label><input type="time" class="item-pre col-12 esconderBout" id="txtBoutTime" name="txtBoutTime">
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-around">
                    <p><img src="img/logo/up.png" alt="less" id="imgUp" class="subir">
                      <img src="img/logo/down.png" alt="more" id="imgDown" class="subir"></p>
                    </div>
                  </div>
<!-- LOCAL -->
                  <div class="row justify-content-between" id="bout-tab">
                    <div class="col-5 bout-layer margina" data-aos="fade-up" data-aos-delay="200">
                      <div class="row justify-content-around">
                        <div class="col-8">
                          <p class="titulo1">Local<span class="text-primary">.</span></p>
                          <label for="selLocal" class="item-pre">Team </label>
                          <select class="form-control item-pre" id="selLocal" name="selLocal"  placeholder="Select a Team">
                            <option value="-1" selected>Seleccione Equipo</option>
                          </select>

                          <label for="selColorLocal" class="item-pre">Color</label>
                          <select class="form-control item-pre" id="selColorLocal" name="selColorLocal">
                            <option value="#EEEEEE">White</option>
                            <option value="#0F0F0F">Black</option>
                            <option value="#A8A8A8">Grey</option>
                            <option value="#F22B28" selected>Red</option>
                            <option value="#FF9900">Orange</option>
                            <option value="#E3D812">Yellow</option>
                            <option value="#00BF30">Green</option>
                            <option value="#2775E8">Blue</option>
                            <option value="#6D0AC4">Purple</option>
                            <option value="#DA0AC4">Pink</option>
                            <option value="#663300">Brown</option>
                          </select>    
                        </div>

                      <div class=" col-3 logo-layer">
                        <div class="row align-items-bottom justify-content-around">                    
                          <img src="img/logo/logo21.svg" class="logo-img" id="fotoLocal" alt="Local">
                          <input type="text" name="colorLocal" id="colorLocal" class="item-pre col-10 nomargina">
                        </div> 
                      </div>
                    </div>

                    <div class="row justify-content-between">
                      <div class="col-5 roster-layer">
                        <label for="selRosterLocal" class="item-pre">Roster</label>
                        <select multiple class="form-control item-pre" id="selRosterLocal" name="selRosterLocal" size="22">
                        </select>
                      </div>
                      <div class="col-1">
                        <div class="row btn-roster"></div>
                        <div class="row justify-content-center">
                          <input type="radio" class="form-control item-charter" id="radSkater" name="radSk" value="skater" checked/><label for="radSkater" class="">&nbsp;Skater&nbsp;</label>
                          <input type="radio" class="form-control item-charter" id="radCaptain" name="radSk" value="captain"/><label for="radCaptain" class="captain">&nbsp;Captain&nbsp;</label>                          
                          <input type="radio" class="form-control item-charter" id="radBench" name="radSk" value="bench"/><label for="radBench" class="bench">&nbsp;&nbsp;Bench&nbsp;&nbsp;</label>
                          <input type="checkbox" class="form-control item-charter" id="chkAlternate" name="chkAlternate" value="alternate"/><label for="chkAlternate" class="alternate">Alternate</label>
                          <button type="button" class="btn btn-dark btnSk" id="btnPasaLocal"><span class="text-primary negrita"><</span></button>
                          <button type="button" class="btn btn-dark btnSk" id="btnVuelveLocal"><span class="text-primary negrita">></span></button>
                          <button type="button" class="btn btn-dark btnSk" id="btnResLocal"><span class="text-primary negrita">>></span></button>
                        </div>
                      </div>

                      <div class="col-5 roster-layer">
                        <label for="selCharterLocal" class="item-pre">Charter</label>
                        <select multiple class="form-control item-pre" id="selCharterLocal" name="selCharterLocal" size="22">
                        </select>
                      </div>
                    </div>
                  </div>
<!-- VISITOR -->
                  <div class="col-5 bout-layer margina" data-aos="fade-up" data-aos-delay="200">
                    <div class="row justify-content-around">
                      <div class="col-8">
                        <p class="titulo1">Visitor<span class="text-primary">.</span></p>
                        <label for="selVisitor" class="item-pre">Team </label>
                        <select class="form-control item-pre" id="selVisitor" name="selVisitor"  placeholder="Select a Team">
                          <option value="-1" selected>Seleccione Equipo</option>
                        </select>
                        <label for="selColorVisitor" class="item-pre">Color</label>
                        <select class="form-control item-pre" id="selColorVisitor" name="selColorVisitor">
                          <option value="#EEEEEE">White</option>
                          <option value="#0F0F0F">Black</option>
                          <option value="#A8A8A8">Grey</option>
                          <option value="#F22B28">Red</option>
                          <option value="#FF9900">Orange</option>
                          <option value="#E3D812">Yellow</option>
                          <option value="#00BF30">Green</option>
                          <option value="#2775E8" selected>Blue</option>
                          <option value="#6D0AC4">Purple</option>
                          <option value="#DA0AC4">Pink</option>
                          <option value="#663300">Brown</option>
                        </select>    
                      </div>
                      <div class=" col-3 logo-layer">
                        <div class="row align-items-bottom justify-content-around">                    
                          <img src="img/logo/logo21.svg" class="logo-img" id="fotoVisitor" alt="Visitor">
                          <input type="text" name="colorVisitor" id="colorVisitor" class="item-pre col-10 nomargina">
                        </div> 
                      </div>
                    </div>

                    <div class="row justify-content-between">
                      <div class="col-5 roster-layer">
                        <label for="selRosterVisitor" class="item-pre">Roster</label>
                        <select multiple class="form-control item-pre" id="selRosterVisitor" name="selRosterVisitor" size="22">
                        </select>
                      </div>

                      <div class="col-1">
                        <div class="row btn-roster"></div>
                        <div class="row justify-content-center">
                          <input type="radio" class="form-control item-charter" id="radSkater" name="radSk" value="skater" checked/><label for="radSkater" class="">&nbsp;Skater&nbsp;</label>
                          <input type="radio" class="form-control item-charter" id="radCaptain" name="radSk" value="captain"/><label for="radCaptain" class="captain">&nbsp;Captain&nbsp;</label>                          
                          <input type="radio" class="form-control item-charter" id="radBench" name="radSk" value="bench"/><label for="radBench" class="bench">&nbsp;&nbsp;Bench&nbsp;&nbsp;</label>
                          <input type="checkbox" class="form-control item-charter" id="chkAlternate" name="chkAlternate" value="alternate"/><label for="chkAlternate" class="alternate">Alternate</label>
                          <button type="button" class="btn btn-dark btnSk" id="btnPasaVisitor"><span class="text-primary negrita"><</span></button>
                          <button type="button" class="btn btn-dark btnSk" id="btnVuelveVisitor"><span class="text-primary negrita">></span></button>
                          <button type="button" class="btn btn-dark btnSk" id="btnResVisitor"><span class="text-primary negrita">>></span></button>
                        </div>
                      </div>
                      
                      <div class="col-5 roster-layer">
                        <label for="selCharterVisitor" class="item-pre">Charter</label>
                        <select multiple class="form-control item-pre" id="selCharterVisitor" name="selCharterVisitor" size="22">
                        </select>
                      </div>
                    </div>
                  </div> 
                </div>
<!-- NSO -->
                <div class="row bout-layer esconder" id="nso-tab">
                  <div class="row justify-content-center">
                    <div class="col-11 bout-layer margina" data-aos="fade-up" data-aos-delay="200">
                      <div class="row">
                        <div class="col-3">            
                          <p class="titulo1">NSO<span class="text-primary">.</span></p>
                        </div> 
                      </div>
                      <div class="row justify-content-between">
                        <div class="col-12">
                          <div class="row justify-content-between"> 
                            <div class="col-5"></div>
                            <div class=" col-2">
                              <div class="row justify-content-between">
                                    <label for="" class="spnEye">&nbsp; CERT</label><label for="" class="spnEye">HEAD &nbsp;</label>
                              </div>
                            </div>
                            <div class="col-5">
                            </div>

                            <div class="col-2">
                              <label for="lblThn" id="lblThnEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnThn" class="spnEye"> THN</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selThn" id="lblThn" class="item-nso thn">Tournament Head Referee</label>
                            </div>
                            <div class=" col-2">
                              <label for="radThn" id="lblCertThn" name="lblCertThn" class=" item-nso thn lblCert"></label>
                              <input type="radio"  id="radThn" value="Thn" name="radHead" class="form-control thn inputa">
                            </div>
                            <div class="col-5">
                              <select id="selThn" name="selThn" class="item-pre col-12 form-control thn">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblTracker" id="lblTrackerEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnTracker" class="spnEye">TRACK</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selTracker" id="lblTracker" class="item-nso tracker">Penalty Tracker </label>
                            </div>
                            <div class=" col-2">
                              <label for="radTracker" id="lblCertTracker" name="lblCertTracker" class=" item-nso tracker lblCert"></label>
                              <input type="radio" id="radTracker" value="Tracker" name="radHead" class="form-control tracker inputa">
                            </div>
                            <div class="col-5">
                              <select id="selTracker" name="selTracker" class="item-pre col-12 form-control tracker">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblWrangler" id="lblWranglerEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnWrangler" class="spnEye">WRAN</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selWrangler" id="lblWrangler" class="item-nso wrangler">Penalty Wrangler </label>
                            </div>
                            <div class=" col-2">
                              <label for="radWrangler" id="lblCertWrangler" name="lblCertWrangler" class=" item-nso wrangler lblCert"></label>
                              <input type="radio" id="radWrangler" value="Wrangler" name="radHead" class="form-control wrangler inputa">
                            </div>
                            <div class="col-5">
                              <select id="selWrangler" name="selWrangler" class="item-pre col-12 form-control wrangler">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblWhite" id="lblWhiteEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnWhite" class="spnEye">WHITE</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selWhite" id="lblWhite" class="item-nso white">WhiteBoard Operator </label>
                            </div>
                            <div class=" col-2">
                              <label for="radWhite" id="lblCertWhite" name="lblCertWhite" class=" item-nso white lblCert"></label>
                              <input type="radio" id="radWhite" value="White" name="radHead" class="form-control white inputa">
                            </div>
                            <div class="col-5">
                              <select id="selWhite" name="selWhite" class="item-pre col-12 form-control white">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblTimer" id="lblTimerEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnTimer" class="spnEye">TIME</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selTimer" id="lblTimer" class="item-nso timer">Jam Timmer </label>
                            </div>
                            <div class=" col-2">
                              <label for="radTimer" id="lblCertTimer" name="lblCertTimer" class=" item-nso timer lblCert"></label>
                              <input type="radio" id="radTimer" value="Timer" name="radHead" class="form-control timer inputa">
                            </div>
                            <div class="col-5">
                              <select id="selTimer" name="selTimer" class="item-pre col-12 form-control timer">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblPb1" id="lblPb1Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnPb1" class="spnEye">PB1</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selPb1"  id="lblPb1" class="item-nso pb1">Penalty Box Manager </label>
                            </div>
                            <div class=" col-2">
                              <label for="radPb1" id="lblCertPb1" name="lblCertPb1" class=" item-nso pb1 lblCert"></label>
                              <input type="radio" id="radPb1" value="Pb1" name="radHead" class="form-control pb1 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selPb1" name="selPb1" class="item-pre col-12 form-control pb1">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblPb2" id="lblPb2Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnPb2" class="spnEye">PB2</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selPb2" id="lblPb2" class="item-nso pb2">Penalty Box Operator </label>
                            </div>
                            <div class=" col-2">
                              <label for="radPb2" id="lblCertPb2" name="lblCertPb2" class=" item-nso pb2 lblCert"></label>
                              <input type="radio" id="radPb2" value="Pb2" name="radHead" class="form-control pb2 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selPb2" name="selPb2" class="item-pre col-12 form-control pb2">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblPb3" id="lblPb3Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnPb3" class="spnEye">PB3</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selPb3" id="lblPb3" class="item-nso pb3">Penalty Box Operator </label>
                            </div>
                            <div class=" col-2">
                              <label for="radPb3" id="lblCertPb3" name="lblCertPb3" class=" item-nso pb3 lblCert"></label>
                              <input type="radio" id="radPb3" value="Pb3" name="radHead" class="form-control pb3 inputa">
                            </div><div class="col-5">
                              <select id="selPb3" name="selPb3" class="item-pre col-12 form-control pb3">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblScore1" id="lblScore1Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnScore1" class="spnEye">SCO1</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selScore1" id="lblScore1" class="item-nso score1">Scorekeeper </label>
                            </div>
                            <div class=" col-2">
                              <label for="radScore1" id="lblCertScore1" name="lblCertScore1" class=" item-nso score1 lblCert"></label>
                              <input type="radio" id="radScore1" value="Score1" name="radHead" class="form-control score1 inputa">
                            </div><div class="col-5">
                              <select id="selScore1" name="selScore1" class="item-pre col-12 form-control score1">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblScore2" id="lblScore2Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnScore2" class="spnEye">SCO2</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selScore2" id="lblScore2" class="item-nso score2">Scorekeeper </label>
                            </div>
                            <div class=" col-2">
                              <label for="radThn" id="lblCertScore2" name="lblCertScore2" class=" item-nso score2 lblCert"></label>
                              <input type="radio" id="radScore2" value="Score2" name="radHead" class="form-control score2 inputa">
                            </div><div class="col-5">
                              <select id="selScore2" name="selScore2" class="item-pre col-12 form-control score2">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblScore3" id="lblScore3Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnScore3" class="spnEye">SCO3</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selScore3" id="lblScore3" class="item-nso score3">Scoreboard Operator </label>
                            </div>
                            <div class=" col-2">
                              <label for="radScore3" id="lblCertScore3" name="lblCertScore3" class=" item-nso score3 lblCert"></label>
                              <input type="radio" id="radScore3" value="Score3" name="radHead" class="form-control score3 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selScore3" name="selScore3" class="item-pre col-12 form-control score3">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblLine1" id="lblLine1Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnLine1" class="spnEye">LINE1</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selLine1" id="lblLine1" class="item-nso line1">Line Up Tracker </label>
                            </div>
                            <div class=" col-2">
                              <label for="radLine1" id="lblCertLine1" name="lblCertLine1" class=" item-nso line1 lblCert"></label>
                              <input type="radio" id="radLine1" value="Line1" name="radHead" class="form-control line1 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selLine1" name="selLine1" class="item-pre col-12 form-control line1">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblLine2" id="lblLine2Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnLine2" class="spnEye">LINE2</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selLine2" id="lblLine2" class="item-nso line2">Line Up Tracker </label>
                            </div>
                            <div class=" col-2">
                              <label for="radLine2" id="lblCertLine2" name="lblCertLine2" class=" item-nso line2 lblCert"></label>
                              <input type="radio" id="radLine2" value="Line2" name="radHead" class="form-control line2 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selLine2"name="selLine2" class="item-pre col-12 form-control line2">
                                <option value="-1">Select Nso</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>   
                    </div>
                  </div>
                </div>
<!-- REFEREE -->
                <div class="row bout-layer esconder" id="ref-tab">
                  <div class="row justify-content-center">
                    <div class="col-11 bout-layer margina" data-aos="fade-up" data-aos-delay="200">
                      <div class="row">
                        <div class="col-3">             
                          <p class="titulo1">Referee<span class="text-primary">.</span></p>
                        </div> 
                      </div>
                      <div class="row justify-content-between">
                        <div class="col-12">
                          <div class="row justify-content-between">
                            <div class="col-5"></div>
                            <div class=" col-2">
                              <div class="row justify-content-between">
                                <label for="" class="spnEye">&nbsp; CERT</label><label for="" class="spnEye">HEAD &nbsp;</label>
                              </div>
                            </div>
                            <div class="col-5">
                            </div>

                            <div class="col-2">
                              <label for="lblThr" id="lblThrEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnThr" class="spnEye"> THR</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selThr" id="lblThr" class="item-nso thr">Tournament Head Referee</label>
                            </div>
                            <div class=" col-2">
                              <label for="radThr" id="lblCertThr" name="lblCertThr" class=" item-nso thr lblCert"></label>
                              <input type="radio"  id="radThr" value="Thr" name="radHeadRef" class="form-control thr inputa">
                            </div>
                            <div class="col-5">
                              <select id="selThr" name="selThr" class="item-pre col-12 form-control thr">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblIprf" id="lblIprfEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnIprf" class="spnEye"> IPR F</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selIprf" id="lblIprf" class="item-nso iprf">IPR Front </label>
                            </div>
                            <div class=" col-2">
                              <label for="radIrpf" id="lblCertIprf" name="lblCertIprf" class=" item-nso iprf lblCert"></label>
                              <input type="radio"  id="radIprf" value="Iprf" name="radHeadRef" class="form-control iprf inputa">
                            </div>
                            <div class="col-5">
                              <select id="selIprf" name="selIprf" class="item-pre col-12 form-control iprf">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblIprb" id="lblIprbEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnIprb" class="spnEye"> IPR B</span> </label>
                            </div>
                            <div class="col-3">
                              <label for="selIprb" id="lblIprb" class="item-nso iprb">IPR Back </label>
                            </div>
                            <div class=" col-2">
                              <label for="radIprb" id="lblCertIprb" name="lblCertIprb" class=" item-nso iprb lblCert"></label>
                              <input type="radio"  id="radIprb" value="Iprb" name="radHeadRef" class="form-control iprb inputa">
                            </div>
                            <div class="col-5">
                              <select id="selIprb" name="selIprb" class="item-pre col-12 form-control iprb">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblJr1" id="lblJr1Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnJr1" class="spnEye"> JR 1</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selJr1" id="lblJr1"class="item-nso jr1">Jam Referee </label>
                            </div>
                            <div class=" col-2">
                              <label for="radJr1" id="lblCertJr1" name="lblCertJr1" class=" item-nso jr1 lblCert"></label>
                              <input type="radio"  id="radJr1" value="Jr1" name="radHeadRef" class="form-control jr1 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selJr1" name="selJr1" class="item-pre col-12 form-control jr1">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblJr2" id="lblJr2Eye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnJr2" class="spnEye"> JR 2</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selJr2" id="lblJr2" class="item-nso jr2">Jam Referee</label>
                            </div>
                            <div class=" col-2">
                              <label for="radJr2" id="lblCertJr2" name="lblCertJr2" class=" item-nso jr2 lblCert"></label>
                              <input type="radio"  id="radJr2" value="Jr2" name="radHeadRef" class="form-control  jr2 inputa">
                            </div>
                            <div class="col-5">
                              <select id="selJr2" name="selJr2" class="item-pre col-12 form-control jr2">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblOprf" id="lblOprfEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnOprf" class="spnEye"> OPR F</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selOprf" id="lblOprf" class="item-nso oprf">OPR Front</label>
                            </div>
                            <div class=" col-2">
                              <label for="radOprf" id="lblCertOprf" name="lblCertOprf" class=" item-nso oprf lblCert"></label>
                              <input type="radio" id="radOprf" value="Oprf" name="radHeadRef" class="form-control oprf inputa">
                            </div>
                            <div class="col-5">
                              <select id="selOprf" name="selOprf" class="item-pre col-12 form-control oprf">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblOprm" id="lblOprmEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnOprm" class="spnEye"> OPR M</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selOprm" id="lblOprm" class="item-nso oprm">OPR Middle</label>
                            </div>
                            <div class=" col-2">
                              <label for="radOprm" id="lblCertOprm" name="lblCertOprm" class=" item-nso oprm lblCert"></label>
                              <input type="radio" id="radOprm" value="Oprm" name="radHeadRef" class="form-control oprm inputa">
                            </div>
                            <div class="col-5">
                              <select id="selOprm" name="selOprm" class="item-pre col-12 form-control oprm">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblOprb" id="lblOprbEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnOprb" class="spnEye"> OPR B</span></label>
                            </div>
                            <div class="col-3">
                              <label for="selOprb" id="lblOprb"class="item-nso oprb">OPR Back</label>
                            </div>
                            <div class=" col-2">
                              <label for="radOprb" id="lblCertOprb" name="lblCertOprb" class=" item-nso oprb lblCert"></label>
                              <input type="radio" id="radOprb" value="Oprb" name="radHeadRef" class="form-control oprb inputa">
                            </div>
                            <div class="col-5">
                              <select id="selOprb" name="selOprb" class="item-pre col-12 form-control oprb">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>

                            <div class="col-2">
                              <label for="lblAlt" id="lblAltEye" class="item-nso spnEye">&nbsp;&nbsp; &#x1f441;<span id="spnAlt" class="spnEye"> ALTER. </span></label>
                            </div>
                            <div class="col-3">
                              <label for="selAlt" id="lblAlt" class="item-nso alter">Alternate</label>
                            </div>
                            <div class=" col-2">
                              <label for="radAlt" id="lblCertAlt" name="lblCertAlt" class=" item-nso alter lblCert"></label>
                              <input type="radio" id="radAlt" value="Alt" name="radAlt" class="form-control alter inputa">
                            </div>
                            <div class="col-5">
                              <select id="selAlt" name="selAlt" class="item-pre col-12 form-control alter">
                                <option value="-1">Select Referee</option>
                              </select>
                            </div>  
                          </div>
                        </div>
                      </div>   
                    </div>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>



  <!-- CONFIGURACION MODAL  -->



        <div class="modal fade modalConfig "  tabindex="-1" role="dialog" aria-labelledby="Bout Configuration" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
              <div class=" row form-group justify-content-around">
                <div class="col-11">
                  <div class="row justify-content-inline mt-2"> 
                    <div class="col-6"><span class="titulo1">Bout Configuration<span class="text-primary">.</span></span></div>
                    <div class="col-3" id="cargaConfig"></div>
                    <div class="col-3"><button type="button" class="btn btn-primary btn-propio mb-2" data-dismiss="modal" aria-label="Close" id="btnClose">&nbsp; Close &nbsp;</button></div>
                  </div>
                </div>

                <div class="col-5">
                  <div class="row modal-layer">
                    <div class="col-9">
                      <label for="txtPeriod" class="item-conf">Period (min)</label>
                      <label for="txtPrebout" class="item-conf">Time to Derby (min)</label>
                      <label for="txtBperiods" class="item-conf">Intermision (min)</label>
                      <label for="txtJam" class="item-conf">Jam (min)</label>
                      <label for="txtBjam" class="item-conf">Between Jams (seg)</label>
                      <label for="txtBox" class="item-conf">Penalty Box (seg)</label>
                      <label for="txtTout" class="item-conf">Team Timeout (min)</label>
                    </div>
                    <div class="col-3">
                      <input type="text" id="txtPeriod" name="txtPeriod" class="form-control"/>
                      <input type="text" id="txtPrebout" name="txtPrebout" class="form-control"/>
                      <input type="text" id="txtBperiods" name="txtBperiods" class="form-control"/>
                      <input type="text" id="txtJam" name="txtJam" class="form-control"/>
                      <input type="text" id="txtBjam" name="txtBjam" class="form-control"/>
                      <input type="text" id="txtBox" name="txtBox" class="form-control"/>
                      <input type="text" id="txtTout" name="txtTout" class="form-control"/>
                    </div>
                  </div>
                </div>

                <div class="col-5">
                  <div class="row modal-layer">
                    <div class="col-9">
                      <label for="txtPeriods" class="item-conf">Periods</label>
                      <label for="txtPenalties" class="item-conf">Penalties per Skater</label>
                      <label for="txtTimeouts" class="item-conf">Team Timeouts</label>
                      <label for="txtReviews" class="item-conf">Official Reviews</label>
                      <label for="txtSkaters" class="item-conf">Maximun Roster</label>
                      <label for="txtBench" class="item-conf">Bench Staff</label>
                      <label for="chkNew" class="item-conf form-check-label">Allow New Skaters</label>
                    </div>
                    <div class="col-3">
                      <input type="text" id="txtPeriods" name="txtPeriods" class="form-control" >
                      <input type="text" id="txtPenalties" name="txtPenalties" class="form-control">
                      <input type="text" id="txtTimeouts" name="txtTimeouts" class="form-control">
                      <input type="text" id="txtReviews" name="txtReviews" class="form-control">
                      <input type="text" id="txtSkaters" name="txtSkaters" class="form-control">
                      <input type="text" id="txtBench" name="txtBench" class="form-control" >
                      <input type="checkbox" id="chkNew" name="chkNew"  class="form-control">  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </form>
  </div>
</body>










            <script>
      var escondido=true; //true solo para fase de pruebas
      var controlLocal = []
      var arrayRosterLocal=[];
      var arrayCharterLocal=[]; 
      var arrayLocal=[];
      var arrayVisitor=[];

      var seleccionado= "";
      var numero="";
      var nombre="";
      var taldea=[];
      var talde="";
      var arrayRef=[];
      var arrayNso=[];

      $(document).ready(function(){
        $.ajax({
          url:'user/leageJson.php',
          method:'GET',
          dataType:'json',
          data:{
          },       
          success: function(data){
            console.log(data);
            var  opcionLeage="";
            $.each(data,function(i, v){
             opcionLeage+='<option value="'+v.idLeage+'">'+v.name+'</option>';
              
            });
              $("#selLeage").append(opcionLeage);
          },
          error: function(error){
            console.log(error);
          }
        });

        leerSelectLocal();
        $.ajax({
          url:"db/selectConfig.php",
          method:"get",
          dataType:"json",
          data:{
            idconfig:1 //Valor por defecto de configuracion.
          },
          success: function(data){ 
            console.log(data)
            var izena=""
            $.each(data, function(i,v){
              $("#txtPeriod").val(v.period)
              $("#txtPrebout").val(v.prebout)
              $("#txtBperiods").val(v.bPeriods)
              $("#txtJam").val(v.jam)
              $("#txtBjam").val(v.bJam)
              $("#txtBox").val(v.box)
              $("#txtTout").val(v.tout)
              $("#txtPeriods").val(v.periods)
              $("#txtPenalties").val(v.penalties)
              $("#txtTimeouts").val(v.timeouts)
              $("#txtReviews").val(v.reviews)
              $("#txtSkaters").val(v.skaters)
              $("#txtBench").val(v.bench)
              if(v.new)
              $("#chkNew").prop("checked",true);
            }); 
            loadboutconfig(controlLocal);   
          },
          error: function(error){
            console.log('NO SE PUEDE CARGAR LA CONFIGURACION');
          }
        });

        $.ajax({
          url:"db/selectTeam.php",
          method:"get",
          dataType:"json",
          data:{},
          success: function(data){ 
               // leerEquipo(data.charter)
           leerNombreEquipo(data)
           cargarEquipoLocal(taldea)  
           cargarEquipoVisitor(taldea)  
         },
         error: function(error){
          console.log('NO SE PUEDEN CARGAR LOS EQUIPOS');
        }
      });

        $.ajax({
          url:"db/selectReferee.php",
          method:"get",
          dataType:"json",
          data:{},
          success: function(data){  
            $.each(data, function(i,v){
             switch(v.rol){
                case "1":
                 arrayNso.push({"num":v.idUser,"rol":v.rol,"derbyname":v.name,"cert":v.idCert}) 
                break;
                case "2":
               arrayRef.push({"num":v.idUser,"rol":v.rol,"derbyname":v.name,"cert":v.idCert}) 
                break;
                default:
              }
            });         
          },
          error: function(error){
            console.log('NO SE PUEDE CARGAR EL DOCUMENTO  JSON REFEREE');
          }
        });







                                  //leer config
    initialRef(arrayRef);
    initialNso(arrayNso);
    ordenarArray(arrayRef);
    ordenarArray(arrayNso);
    clickNso();
    clickRef();
    changeSelRef();
    changeSelNso();
    
    escondid();        
    color();             



    $("#txtSkaters").click(function(){
      var respuesta=confirm("Modificar este valor vacia las listas de Roster.\nSeguro que quieres continuar?")
      if(respuesta)
        $("#btnRes").click()
      else
        $("#txtPeriod").focus()
    });
    $("#txtBench").click(function(){
      var respuesta=confirm("Modificar este valor vacia las listas de Roster.\nSeguro que quieres continuar?")
      if(respuesta)
        $("#btnRes").click()
      else
        $("#txtPeriod").focus()
    });

      //COLOR

      $("#selColorLocal").change(function(){
        color();
      });
      $("#selColorVisitor").change(function(){
        color();
      });

                                      // Mostrar menus NSO REF TEAM

          $("#btnTeam").click(function(){
            $("#bout-tab").show(800);
            $("#nso-tab").hide(800);
            $("#ref-tab").hide(800);
          });
          $("#btnNso").click(function(){
            $("#bout-tab").hide(800);
            $("#nso-tab").show(800);
            $("#ref-tab").hide(800);
          });
          $("#btnRef").click(function(){
            $("#bout-tab").hide(800);
            $("#nso-tab").hide(800);
            $("#ref-tab").show(800);
          });

                                                //IMAGEN SUBIR BOUT

        $(".subir").click(function(){
          escondid();
        });




                                                // BOTONES



        $("#btnSave").click(function(){
          alert("The Bout Is Saved!");
        });
        $("#btnReset").click(function(){
          alert("Are You Sure to Delete all The Prebout?");
        });




                                    //LOCAL

        $("#selLocal").change(function(){
          var id=$("#selLocal option:selected").val();
          console.log (id)
          $.ajax({
            url:"db/selectCharter.php",
            method:"get",
            dataType:"json",
            data:{
              idTeam:id
              
            },
            success: function(data){ 
              console.log(data)
              $.each(data, function(i,v){
              arrayLocal.push({"idSkater":v.idSkater,"idTeam":v.idTeam,"num":v.numero,"derbyname":v.derbyname,"hoh":v.hoh,"health":v.health})
               });
              cargarSelCharterLocal(arrayLocal)

           },
           error: function(error){
            console.log('NO SE PUEDE CARGAR EL CHARTER');
          }
        });
         
          // cargarSelCharterLocal(arrayLocal,).val());
        });
        $("#btnPasaLocal").click(function(){
          botonPasaLocal();
        });
        $("#btnVuelveLocal").click(function(){
         botonVuelveLocal();
        });
        $("#btnResLocal").click(function(){
          botonResLocal()
        }); 
        $('#selCharterLocal').change(function(event) {
          if ($(this).val().length > 1) {
            alert("Be Patient My Friend. You have to select one by one.");
            $("#selCharterLocal option").prop("selected", false);
          }
        });
        $('#selRosterLocal').change(function(event) {
          if ($(this).val().length > 1) {
            alert("Be Patient My Friend. You have to select one by one.");
            $("#selRosterLocal option").prop("selected", false);
          }
        });   

        //VISITOR

        $("#selVisitor").change(function(){
          var id=$("#selVisitor option:selected").val();
          console.log (id)
          $.ajax({
            url:"db/selectCharter.php",
            method:"get",
            dataType:"json",
            data:{
              idTeam:id
              
            },
            success: function(data){ 
              console.log(data)
              $.each(data, function(i,v){
              arrayVisitor.push({"idSkater":v.idSkater,"idTeam":v.idTeam,"num":v.numero,"derbyname":v.derbyname,"hoh":v.hoh,"health":v.health})
               });
              cargarSelCharterVisitor(arrayVisitor)

           },
           error: function(error){
            console.log('NO SE PUEDE CARGAR EL CHARTER');
          }
        });
         
          // cargarSelCharterVisitor(arrayVisitor,).val());
        });
        $("#btnPasaVisitor").click(function(){
          botonPasaVisitor();
        });
        $("#btnVuelveVisitor").click(function(){
         botonVuelveVisitor();
        });
        $("#btnResVisitor").click(function(){
          botonResVisitor()
        }); 
        $('#selCharterVisitor').change(function(event) {
          if ($(this).val().length > 1) {
            alert("Be Patient My Friend. You have to select one by one.");
            $("#selCharterVisitor option").prop("selected", false);
          }
        });
        $('#selRosterVisitor').change(function(event) {
          if ($(this).val().length > 1) {
            alert("Be Patient My Friend. You have to select one by one.");
            $("#selRosterVisitor option").prop("selected", false);
          }
        });   


                                                                    



    });                                                      //DOCUMENT READY    });










                                                                             // fFUNCIONES


       function ordenarArray(array){
        console.log(array)
        array.sort(function (a, b) {
          if (a.num > b.num) {
            return 1;
          }
          if (a.num < b.num) {
            return -1;
          }
          return 0;
        });
        console.log('array ordenada')
        console.log(array)
        return(array); 
      }                                                                                              


      function escondid(){
        if(escondido==true){
          $("#imgUp").hide()
          $("#imgDown").show()
          $(".esconderBout").hide()
          escondido=false
        }
        else{
          $("#imgUp").show()
          $("#imgDown").hide()
          $(".esconderBout").show()
          escondido=true
        }
      }
      function color(){
        var colorL = $("#selColorLocal option:selected").val();
        $("#colorLocal").css({"background-color":colorL});
        var colorV = $("#selColorVisitor option:selected").val();
        $("#colorVisitor").css({"background-color":colorV});
      }

      function loadboutconfig(controlLocal){                                              
        controlLocal[0]=parseInt($("#txtSkaters").val());
        controlLocal[1]=parseInt($("#txtBench").val());
        controlLocal[2]=1;
        controlLocal[3]=1;
        return controlLocal;
      }



                                                                              //FUNCIONES REF & NSO

      function initialRef(){
        $(".iprf").hide();
        $(".iprb").hide();
        $(".oprf").hide();
        $(".oprm").hide();
        $(".oprb").hide();
        $(".thr").hide();
        $(".jr1").hide();
        $(".jr2").hide();
        $(".alter").hide();
      }

      function initialNso(){
        $(".pb1").hide();
        $(".pb2").hide();
        $(".pb3").hide();
        $(".tracker").hide();
        $(".wrangler").hide();
        $(".white").hide();
        $(".score1").hide();
        $(".score2").hide();
        $(".score3").hide();
        $(".line1").hide();
        $(".line2").hide();
        $(".timer").hide();
        $(".thn").hide();
      }

        function cargarSelRef(array,element,elemento){    //Compartido para Ref y Nso
          var opcion="";
          // $(''+elemento+'').remove();
          $.each(array, function(i,v){
            opcion+='<option value="'+v.num+'">'+v.derbyname+'</option>';
          });
          $(element).append(opcion);
        }

        function cargarCert(array,numero,elementu){         //Compartido para Ref y Nso
        console.log(array)
        console.log(numero)
        console.log(elementu)
          var certificacion="";
          $.each(array, function(i,v){
            if (v.num==numero)
            certificacion=v.cert
          });
          $(''+elementu+'').text(certificacion);
        }

        function changeSelRef(){
          $("#selThr").change(function(){
            var numero= $("#selThr option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertThr');
        });
          $("#selIprf").change(function(){
            var numero= $("#selIprf option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertIprf');
        });
          $("#selIprb").change(function(){
            var numero= $("#selIprb option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertIprb');
        });
          $("#selJr1").change(function(){
            var numero= $("#selJr1 option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertJr1');
        });
          $("#selJr2").change(function(){
            var numero= $("#selJr2 option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertJr2');
        });
          $("#selOprf").change(function(){
            var numero= $("#selOprf option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertOprf');
        });
          $("#selOprm").change(function(){
            var numero= $("#selOprm option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertOprm');
        });
          $("#selOprb").change(function(){
            var numero= $("#selOprb option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertOprb');
        });
          $("#selAlt").change(function(){
            var numero= $("#selAlt option:selected").val();
          cargarCert(arrayRef,numero,'#lblCertAlt');
        });


        }

        function changeSelNso(){
          $("#selThn").change(function(){
            var numero= $("#selThn option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertThn');
        })
          $("#selPb1").change(function(){
            var numero= $("#selPb1 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertPb1');
        })
          $("#selPb2").change(function(){
            var numero= $("#selPb2 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertPb2');
        })
          $("#selPb3").change(function(){
            var numero= $("#selPb3 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertPb3');
        })
          $("#selTracker").change(function(){
            var numero= $("#selTracker option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertTracker');
        })
          $("#selWrangler").change(function(){
            var numero= $("#selWrangler option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertWrangler');
        })
          $("#selWhite").change(function(){
            var numero= $("#selWhite option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertWhite');
        })
          $("#selScore1").change(function(){
            var numero= $("#selScore1 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertScore1');
        })
          $("#selScore2").change(function(){
            var numero= $("#selScore2 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertScore2');
        })
          $("#selScore3").change(function(){
            var numero= $("#selScore3 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertScore3');
        })
          $("#selLine1").change(function(){
            var numero= $("#selLine1 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertLine1');
        })
          $("#selLine2").change(function(){
            var numero= $("#selLine2 option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertLine2');
        })
          $("#selTimer").change(function(){
            var numero= $("#selTimer option:selected").val();
          cargarCert(arrayNso,numero,'#lblCertTimer');
        })


        }

        function clickRef(){
         $("#lblThrEye").click(function(){
          $(".thr").toggle();
          $("#spnThr").toggle();
          cargarSelRef(arrayRef,selThr,'#selThr option');
        })
         ;$("#lblIprfEye").click(function(){
          $(".iprf").toggle();
          $("#spnIprf").toggle();
          cargarSelRef(arrayRef,selIprf,'#selIprf option');
        });
         $("#lblIprbEye").click(function(){
          $(".iprb").toggle();
          $("#spnIprb").toggle();
          cargarSelRef(arrayRef,selIprb,'#selIprb option');
        });
         $("#lblOprfEye").click(function(){
          $(".oprf").toggle();
          $("#spnOprf").toggle();
          cargarSelRef(arrayRef,selOprf,'#selOprf option');
        });
         $("#lblOprmEye").click(function(){
          $(".oprm").toggle();
          $("#spnOprm").toggle();
          cargarSelRef(arrayRef,selOprm,'#selOprm option');
        });
         $("#lblOprbEye").click(function(){
          $(".oprb").toggle();
          $("#spnOprb").toggle();
          cargarSelRef(arrayRef,selOprb,'#selOprb option');
        });
         $("#lblJr1Eye").click(function(){
          $(".jr1").toggle();
          $("#spnJr1").toggle();
          cargarSelRef(arrayRef,selJr1,'#selJr1 option');
        });
         $("#lblJr2Eye").click(function(){
          $(".jr2").toggle();
          $("#spnJr2").toggle();
          cargarSelRef(arrayRef,selJr2,'#selJr2 option');
        });
         $("#lblAltEye").click(function(){
          $(".alter").toggle();
          $("#spnAlt").toggle();
          cargarSelRef(arrayRef,selAlt,'#selAlt option');
        });
       }

       function clickNso(){
         $("#lblPb1Eye").click(function(){
          $(".pb1").toggle();
          $("#spnPb1").toggle();
          cargarSelRef(arrayNso,selPb1,'#selPb1 option');
        });
         ;$("#lblPb2Eye").click(function(){
          $(".pb2").toggle();
          $("#spnPb2").toggle();
          cargarSelRef(arrayNso,selPb2,'#selPb2 option');
        });
         $("#lblPb3Eye").click(function(){
          $(".pb3").toggle();
          $("#spnPb3").toggle();
          cargarSelRef(arrayNso,selPb3,'#selPb3 option');
        });
         $("#lblTrackerEye").click(function(){
          $(".tracker").toggle();
          $("#spnTracker").toggle();
          cargarSelRef(arrayNso,selTracker,'#selTracker option');
        });
         $("#lblWranglerEye").click(function(){
          $(".wrangler").toggle();
          $("#spnWrangler").toggle();
          cargarSelRef(arrayNso,selWrangler,'#selWrangler option');
        });
         $("#lblWhiteEye").click(function(){
          $(".white").toggle();
          $("#spnWhite").toggle();
          cargarSelRef(arrayNso,selWhite,'#selWhite option');
        });
         $("#lblScore1Eye").click(function(){
          $(".score1").toggle();
          $("#spnScore1").toggle();
          cargarSelRef(arrayNso,selScore1,'#selScore1 option');
        });
         $("#lblScore2Eye").click(function(){
          $(".score2").toggle();
          $("#spnScore2").toggle();
          cargarSelRef(arrayNso,selScore2,'#selScore2 option');
        });
         $("#lblScore3Eye").click(function(){
          $(".score3").toggle();
          $("#spnScore3").toggle();
          cargarSelRef(arrayNso,selScore3,'#selScore3 option');
        });
         $("#lblLine1Eye").click(function(){
          $(".line1").toggle();
          $("#spnLine1").toggle();
          cargarSelRef(arrayNso,selLine1,'#selLine1 option');
        });
         $("#lblLine2Eye").click(function(){
          $(".line2").toggle();
          $("#spnLine2").toggle();
          cargarSelRef(arrayNso,selLine2,'#selLine2 option');
        });
         $("#lblTimerEye").click(function(){
          $(".timer").toggle();
          $("#spnTimer").toggle();
          cargarSelRef(arrayNso,selTimer,'#selTimer option');
        });
         $("#lblThnEye").click(function(){
          $(".thn").toggle();
          $("#spnThn").toggle();
          cargarSelRef(arrayNso,selThn,'#selThn option');
        });



       }


                                                                                                       // FUNCIONES EQUIPOS
        function leerNombreEquipo(teamName){
          $.each(teamName, function(i,v){

            taldea.push({"idTeam":v.idTeam,"idLeage":v.idLeage,"nameTeam":v.nameTeam,"photo":v.photo}) 
          });

        }





                                                                                    // FUNCIONES LOCAL

        function leerSelectLocal(){
          if($("#selCharterLocal").children().length==0){
            console.log("CharterLocal vacio");
          }else{
            $('#selCharterLocal option').each(function(i){
              var w=$(this);                                        
              arrayCharterLocal.push({"num":w.val(),"derbyname":w.text(),"rol":"","alternate":""});                                             
            });
          }
        }

        function cargarEquipoLocal(array){
          $.each(array,function(i,v){
            var opcion='<option value="'+v.idTeam+'">'+v.nameTeam+'</option>'
            $("#selLocal").append(opcion)
          });
          // cargarSelCharterLocal(arrayLocal,"1");       //-1 para Opcio Seleccione Equipo.
          // $("#selLocal").val("1")                       //Linea para fase de pruebas.
        }

        function cargarSelCharterLocal(array){
          $('#selCharterLocal option').remove();
          arrayCharterLocal=[];
          arrayRosterLocal=[];
          var espacios="";
          $.each(array,function(i,v){
            var largo= v.num.toString();
            largo=largo.length;
            console.log(largo)
            
              switch(largo){
                case 1:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 2:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 3:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 4:
                espacios="&nbsp;";
                break;
                default:
                alert("Se produjo un error al cargar los numeros.")
              }
              var nomb=v.num+espacios+v.derbyname
              var opcion='<option value="'+v.num+'">'+nomb+'</option>'

              $("#selCharterLocal").append(opcion)
              var aukera=$('#selCharterLocal option:last')
              arrayCharterLocal.push({"num":aukera.val(),"derbyname":aukera.text()});
            
          });
          

        }


        function cargarCharterLocal(array){

          $('#selCharterLocal option').remove();
          $.each(array,function(i,v){
            var opcion='<option value='+v.num+'>'+v.derbyname+'</option>'
            $('#selCharterLocal').append(opcion);
          }); 
        }

        function cargarRosterLocal(array){
          var alterno="";
          var estado="";
          var opcion="";
          $('#selRosterLocal option').remove();
          $.each(array,function(i,v){
            alterno=v.alternate
            estado=v.rol
            opcion='<option value='+v.num+'>'+v.derbyname+'</option>'
            $('#selRosterLocal').append(opcion);
            $('#selRosterLocal option[value='+v.num+']').addClass(estado)
            $('#selRosterLocal option[value='+v.num+']').addClass(alterno)
          });
        }

        function botonPasaLocal(){        	 
          var estado =$('input[name="radSk"]:checked').val();
          var alterno="";
          var opcion = $("#selCharterLocal option:selected");
          var nomb=$("#selCharterLocal option:selected").text();
          var valor= $("#selCharterLocal option:selected").val();
          var valore=valor;
          



          if ($("#chkAlternate").prop("checked")==true)
            alterno="alternate";

          if ((estado==undefined) || (valor==undefined))
            alert("Algo lo seleccionaste mal")
          else{
            if(estado=="bench"){
              var valore='B'+valor+''
              nomb='B'+nomb+''
            }
            arrayRosterLocal.push({"num":valore,"derbyname":nomb,"rol":estado,"alternate":alterno});
            ordenarArray(arrayRosterLocal);
            cargarRosterLocal(arrayRosterLocal);
          }

          $("#selRosterLocal option").prop("selected", false);
          $("#selCharterLocal option:selected").remove();
          $.each(arrayCharterLocal,function(i,v){


            if(v.num == valor){                                         
              arrayCharterLocal.splice(i,1);
              console.log("arrayCharterLocal",arrayCharterLocal)
              return false;
            }
          });
          if ($("#chkAlternate").prop("checked")==true){
            $("#chkAlternate").prop('disabled',true)
            $("#chkAlternate").prop("checked", false);
            controlLocal[3]=controlLocal[3]-1;
          };

          switch(estado){ 
            case "skater":
            controlLocal[0]=controlLocal[0]-1                            
            if(controlLocal[0]==0){
              $("#radSkater").prop('disabled',true)
              $("#radSkater").prop("checked", false);
            }
            break;
            case "bench":
            controlLocal[1]=controlLocal[1]-1
            if(controlLocal[1]==0){
              $("#radBench").prop('disabled',true)
              $("#radBench").prop("checked", false); 
            }
            break;
            case "captain":
            controlLocal[2]=controlLocal[2]-1
            controlLocal[0]=controlLocal[0]-1 
            if(controlLocal[2]==0){
              $("#radCaptain").prop('disabled',true)
              $("#radSkater").prop("checked", true); 
            }
            break;   
          }
        }

        

        function botonVuelveLocal(){
          var opcion = $("#selRosterLocal option:selected").text();
          var valor= $("#selRosterLocal option:selected").val();
          var estado="";
          var alterno="";
          $.each(arrayRosterLocal,function(i,v){
            if(v.num == valor){ 
              estado=v.rol;
              alterno=v.alternate;
              arrayRosterLocal.splice(i,1);
              cargarRosterLocal(arrayRosterLocal)
              return false;
            }
          });
          if(estado=="bench"){
            console.log("valor",valor)
            valor=valor.substring(1);
            opcion=opcion.substring(1);
            console.log(valor)
          }
          arrayCharterLocal.push({"num":valor,"derbyname":opcion});
          switch (estado){
            case "skater":
            $('#selRosterLocal option[value='+valor+']').removeClass("skater")
            controlLocal[0]+=1;
            if(controlLocal[0]!=0){
              $("#radSkater").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            case "bench":
            $('#selRosterLocal option[value='+valor+']').removeClass("bench")
            controlLocal[1]+=1;
            if(controlLocal[1]!=0){
              $("#radBench").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            case "captain":
            $('#selRosterLocal option[value='+valor+']').removeClass("captain")
            controlLocal[2]+=1;
            controlLocal[0]+=1;
            if(controlLocal[2]!=0){
              $("#radCaptain").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            if(controlLocal[0]!=0){
              $("#radSkater").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            default:
            alert("No se pudo cargar el rol de esta jugadora.")
          }
          if (alterno=="alternate"){
            $("#chkAlternate").prop('disabled',false)
            $("#chkAlternate").prop("checked", false);
            $('#selRosterLocal option[value='+valor+']').removeClass("alternate")
          }
          $("#selRosterLocal option:selected").remove();
          ordenarArray(arrayCharterLocal);
          cargarCharterLocal(arrayCharterLocal);
        }

        function botonResLocal(){
          var estado= ["skater","alternate","bench","captain"];
          $(estado).each(function(){
            $('#selRosterLocal option').removeClass(estado)
          });   
          loadboutconfig(controlLocal);
          cargarSelCharterLocal(arrayLocal);
          $("#radSkater").prop('disabled',false)
          $("#radBench").prop('disabled',false)
          $("#radCaptain").prop('disabled',false)
          $("#chkAlternate").prop('disabled',false)
          $("#selRosterLocal option").prop("selected", false);
          $("#selRosterLocal option").remove();

        }




        // FUNCIONES VISITOR

        function leerSelectVisitor(){
          if($("#selCharterVisitor").children().length==0){
            console.log("CharterVisitor vacio");
          }else{
            $('#selCharterVisitor option').each(function(i){
              var w=$(this);                                        
              arrayCharterVisitor.push({"num":w.val(),"derbyname":w.text(),"rol":"","alternate":""});                                             
            });
          }
        }

        function cargarEquipoVisitor(array){
          $.each(array,function(i,v){
            var opcion='<option value="'+v.idTeam+'">'+v.nameTeam+'</option>'
            $("#selVisitor").append(opcion)
          });
          // cargarSelCharterVisitor(arrayVisitor,"1");       //-1 para Opcio Seleccione Equipo.
          // $("#selVisitor").val("1")                       //Linea para fase de pruebas.
        }

        function cargarSelCharterVisitor(array){
          $('#selCharterVisitor option').remove();
          arrayCharterVisitor=[];
          arrayRosterVisitor=[];
          var espacios="";
          $.each(array,function(i,v){
            var largo= v.num.toString();
            largo=largo.length;
            console.log(largo)
            
              switch(largo){
                case 1:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 2:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 3:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 4:
                espacios="&nbsp;";
                break;
                default:
                alert("Se produjo un error al cargar los numeros.")
              }
              var nomb=v.num+espacios+v.derbyname
              var opcion='<option value="'+v.num+'">'+nomb+'</option>'

              $("#selCharterVisitor").append(opcion)
              var aukera=$('#selCharterVisitor option:last')
              arrayCharterVisitor.push({"num":aukera.val(),"derbyname":aukera.text()});
            
          });
          

        }


        function cargarCharterVisitor(array){

          $('#selCharterVisitor option').remove();
          $.each(array,function(i,v){
            var opcion='<option value='+v.num+'>'+v.derbyname+'</option>'
            $('#selCharterVisitor').append(opcion);
          }); 
        }

        function cargarRosterVisitor(array){
          var alterno="";
          var estado="";
          var opcion="";
          $('#selRosterVisitor option').remove();
          $.each(array,function(i,v){
            alterno=v.alternate
            estado=v.rol
            opcion='<option value='+v.num+'>'+v.derbyname+'</option>'
            $('#selRosterVisitor').append(opcion);
            $('#selRosterVisitor option[value='+v.num+']').addClass(estado)
            $('#selRosterVisitor option[value='+v.num+']').addClass(alterno)
          });
        }

        function botonPasaVisitor(){           
          var estado =$('input[name="radSk"]:checked').val();
          var alterno="";
          var opcion = $("#selCharterVisitor option:selected");
          var nomb=$("#selCharterVisitor option:selected").text();
          var valor= $("#selCharterVisitor option:selected").val();
          var valore=valor;
          



          if ($("#chkAlternate").prop("checked")==true)
            alterno="alternate";

          if ((estado==undefined) || (valor==undefined))
            alert("Algo lo seleccionaste mal")
          else{
            if(estado=="bench"){
              var valore='B'+valor+''
              nomb='B'+nomb+''
            }
            arrayRosterVisitor.push({"num":valore,"derbyname":nomb,"rol":estado,"alternate":alterno});
            ordenarArray(arrayRosterVisitor);
            cargarRosterVisitor(arrayRosterVisitor);
          }

          $("#selRosterVisitor option").prop("selected", false);
          $("#selCharterVisitor option:selected").remove();
          $.each(arrayCharterVisitor,function(i,v){


            if(v.num == valor){                                         
              arrayCharterVisitor.splice(i,1);
              console.log("arrayCharterVisitor",arrayCharterVisitor)
              return false;
            }
          });
          if ($("#chkAlternate").prop("checked")==true){
            $("#chkAlternate").prop('disabled',true)
            $("#chkAlternate").prop("checked", false);
            controlVisitor[3]=controlVisitor[3]-1;
          };

          switch(estado){ 
            case "skater":
            controlVisitor[0]=controlVisitor[0]-1                            
            if(controlVisitor[0]==0){
              $("#radSkater").prop('disabled',true)
              $("#radSkater").prop("checked", false);
            }
            break;
            case "bench":
            controlVisitor[1]=controlVisitor[1]-1
            if(controlVisitor[1]==0){
              $("#radBench").prop('disabled',true)
              $("#radBench").prop("checked", false); 
            }
            break;
            case "captain":
            controlVisitor[2]=controlVisitor[2]-1
            controlVisitor[0]=controlVisitor[0]-1 
            if(controlVisitor[2]==0){
              $("#radCaptain").prop('disabled',true)
              $("#radSkater").prop("checked", true); 
            }
            break;   
          }
        }

        

        function botonVuelveVisitor(){
          var opcion = $("#selRosterVisitor option:selected").text();
          var valor= $("#selRosterVisitor option:selected").val();
          var estado="";
          var alterno="";
          $.each(arrayRosterVisitor,function(i,v){
            if(v.num == valor){ 
              estado=v.rol;
              alterno=v.alternate;
              arrayRosterVisitor.splice(i,1);
              cargarRosterVisitor(arrayRosterVisitor)
              return false;
            }
          });
          if(estado=="bench"){
            console.log("valor",valor)
            valor=valor.substring(1);
            opcion=opcion.substring(1);
            console.log(valor)
          }
          arrayCharterVisitor.push({"num":valor,"derbyname":opcion});
          switch (estado){
            case "skater":
            $('#selRosterVisitor option[value='+valor+']').removeClass("skater")
            controlVisitor[0]+=1;
            if(controlVisitor[0]!=0){
              $("#radSkater").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            case "bench":
            $('#selRosterVisitor option[value='+valor+']').removeClass("bench")
            controlVisitor[1]+=1;
            if(controlVisitor[1]!=0){
              $("#radBench").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            case "captain":
            $('#selRosterVisitor option[value='+valor+']').removeClass("captain")
            controlVisitor[2]+=1;
            controlVisitor[0]+=1;
            if(controlVisitor[2]!=0){
              $("#radCaptain").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            if(controlVisitor[0]!=0){
              $("#radSkater").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            default:
            alert("No se pudo cargar el rol de esta jugadora.")
          }
          if (alterno=="alternate"){
            $("#chkAlternate").prop('disabled',false)
            $("#chkAlternate").prop("checked", false);
            $('#selRosterVisitor option[value='+valor+']').removeClass("alternate")
          }
          $("#selRosterVisitor option:selected").remove();
          ordenarArray(arrayCharterVisitor);
          cargarCharterVisitor(arrayCharterVisitor);
        }

        function botonResVisitor(){
          var estado= ["skater","alternate","bench","captain"];
          $(estado).each(function(){
            $('#selRosterVisitor option').removeClass(estado)
          });   
          loadboutconfig(controlVisitor);
          cargarSelCharterVisitor(arrayVisitor);
          $("#radSkater").prop('disabled',false)
          $("#radBench").prop('disabled',false)
          $("#radCaptain").prop('disabled',false)
          $("#chkAlternate").prop('disabled',false)
          $("#selRosterVisitor option").prop("selected", false);
          $("#selRosterVisitor option").remove();

        }





                                                                            

        

      </script>







      <!-- FIN PAGINA -->



<?php include("footer.php") ?>

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