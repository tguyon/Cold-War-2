<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
    <title> </title>
  </head>
  <body>
    <!-- Balise de la fenêtre Modale d'events   -->
    <div id="eventModal" class="modal">
      <div id="eventContent" class="modal-content">  FENETRE MODALE</div>
    </div>
    <div class="main">
      <div class="statbar">
        <div class="score">
          <div class="USA">
            <img src="images/USA.png" alt="">
            <p><span id="USApts">100000</span> pts</p>
          </div>
          <div class="USSR">
            <img src="images/USSR.png" alt="">
            <p><span id="USSRpts">100000</span> pts</p>
          </div>
          <div class="China">
            <img src="images/China.png" alt="">
            <p><span id="Chinapts">100000</span> pts</p>
          </div>
        </div>
        <div class="coldwar">
          <h1>COLD WAR II</h1>
        </div>
        <div class="ressource">
          <p>$<span id="money">100000</span></p>
          <img src="images/Defcon_5_type_2.gif" width="175" height="47" class="activeDef">
          <img src="images/Defcon_4_type_2.gif" width="175" height="47" class="hideDef">
          <img src="images/Defcon_3_type_2.gif" width="175" height="47" class="hideDef">
          <img src="images/Defcon_2_type_2.gif" width="175" height="47" class="hideDef">
          <img src="images/Defcon_1_type_2.gif" width="175" height="47" class="hideDef">

          <button type="button" name="button" class="sauvegarde">Sauvegarder</button>
        </div>
      </div>
      <div class="telex">
        <div class="carousel">
          <div class="news">
            <span>Latest News</span>
            <ul>
              <li><a href="#">Hongrie : répression policière.</a></li>
              <li><a href="#">Allemagne : mise en place d'une bizone économique américano-britanique</a></li>
              <li><a href="#">France : élection de Vincent Auriol.</a></li>
              <li><a href="#">Egypte : la question du retrait des troupes britanniques portée devant l'ONU.</a></li>
              <li><a href="#">Birmanie: négociation d'un accord avec le Royaume Uni pour l'indépendance .</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="carte">
        <div id="world-map" style="width: 100%; height: 100%"></div>
        <div class="date">
          <p><span id="monthDate">Janvier</span> <span id="yearDate">1947</span></p>
        </div>
        <div class="carteBtn">
          <div class="btnA"><img src="images/Diplo_1.png" alt=""></div>
          <div class="btnB">B</div>
          <div class="btnC">C</div>
          <div class="btnD">D</div>
        </div>
        <button type="button" name="button" class="nextTurn">></button>
      </div>
      
    </div>
    <div id="exec"></div>
    
    <script src="jquery.js"></script>
    <script src="jquery-jvectormap-2.0.3.min.js"></script>
    <!--<script src="jquery-jvectormap-world-mill.js"></script>-->
    <script src="jquery-jvectormap-world-mill.php"></script>
    <!-- Les scripts qui gèrent les affichage (carte, scores, fenêtres d'event, etc...)   -->
    <script src="windowscript.js"></script>

  </body>
</html>
