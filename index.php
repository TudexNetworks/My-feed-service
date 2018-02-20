<!doctype html>
<html lang="es-la">
   <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Tudex my feed service - Inicio</title>
      <!-- Page styles -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="res/material.css">
      <link rel="stylesheet" href="res/styles.css">
      <style>
         #view-source {
         position: fixed;
         display: block;
         right: 0;
         bottom: 0;
         margin-right: 40px;
         margin-bottom: 40px;
         z-index: 900;
         }
      </style>
<script src="res/ajax.js"></script>
<script>
function myFunction(){
var n=document.getElementById('search-field').value;
if(n==''){
 document.getElementById("myDiv").innerHTML="";
 document.getElementById("myDiv").style.border="0px";
 document.getElementById("pers").innerHTML="";
 return;
}

loadDoc("q="+n,"proc.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    document.getElementById("myDiv").style.border="1px solid #A5ACB2";
    }else{ document.getElementById("myDiv").innerHTML='<img src="load.gif" width="50" height="50" />'; }
  });
}

//-------------------------------

function myFunction2(cod){
document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";
loadDoc("vcod="+cod,"proc2.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("pers").innerHTML=xmlhttp.responseText;
    }else{ document.getElementById("pers").innerHTML='<img src="load.gif" width="50" height="50" />'; }
  });
}

</script>      


   </head>
   <body>
</html>
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
         <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
               <a href="index.php">
                  <span class="android-title mdl-layout-title">
                     <img class="android-logo-image" src="img/0/logo/square/res/mipmap-xhdpi/ic_launcher.png">
                  </span>
               </a>
               <!-- Add spacer, to align navigation to the right in desktop -->
               <div class="android-header-spacer mdl-layout-spacer"></div>
               <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                   

               </div>
               <!-- Navigation -->
               <div class="android-navigation-container">
                  <nav class="android-navigation mdl-navigation">
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://www.tudexnetworks.com">Tudex Networks</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://github.com/TudexNetworks/Tudex-Games-Website">GitHub  <i class="material-icons">code</i></a>
                  </nav>
               </div>
               <span class="android-mobile-title mdl-layout-title">
               <img class="android-logo-image" src="img/0/logo/square/res/mipmap-xhdpi/ic_launcher.png">
               </span>
               <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
               <i class="material-icons">shared</i>
               </button>
               <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                  <a href="https://www.facebook.com/sharer.php?u=https://www.tudexgames.com/" target="_blank">
                     <li class="mdl-menu__item">Facebook</li>
                  </a>
                  <a href="https://twitter.com/intent/tweet?text=Mira+sobre+los+mejores+%23juegos+en+%23tudexgames&url=https://www.tudexgames.com/" target="_blank">
                     <li class="mdl-menu__item">Twitter</li>
                  </a>
                  <a href="https://plus.google.com/share?url=https://www.tudexgames.com" target="_blank">
                     <li class="mdl-menu__item">Google+</li>
                  </a>
               </ul>
            </div>
         </div>
         <div class="android-content mdl-layout__content">
            <a name="top"></a>


            <div class="android-more-section">
               <div class="android-section-title mdl-typography--display-1-color-contrast">Mira juegos en Tudex Games</div>
               <div class="android-card-container mdl-grid">
                  <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                     <div class="mdl-card__media">
                        <img src="IMAGEN">
                     </div>
                     <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">titulo</h4>
                     </div>
                     <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">nombre</span>
                     </div>
                     <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="URL">
                        IR A LA FUENTE
                        <i class="material-icons">chevron_right</i>TITULO
                        </a>
                     </div>
                  </div>

                  <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                     <div class="mdl-card__media">
                        <img src="IMAGEN">
                     </div>
                     <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">titulo</h4>
                     </div>
                     <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">nombre</span>
                     </div>
                     <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="URL">
                        IR A LA FUENTE
                        <i class="material-icons">chevron_right</i>TITULO
                        </a>
                     </div>
                  </div>

                  <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                     <div class="mdl-card__media">
                        <img src="IMAGEN">
                     </div>
                     <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">titulo</h4>
                     </div>
                     <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">nombre</span>
                     </div>
                     <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="URL">
                        IR A LA FUENTE
                        <i class="material-icons">chevron_right</i>TITULO
                        </a>
                     </div>
                  </div>

                  <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                     <div class="mdl-card__media">
                        <img src="IMAGEN">
                     </div>
                     <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">titulo</h4>
                     </div>
                     <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">nombre</span>
                     </div>
                     <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="URL">
                        IR A LA FUENTE
                        <i class="material-icons">chevron_right</i>TITULO
                        </a>
                     </div>
                  </div>
               </div>



            </div>








           <footer class="android-footer mdl-mega-footer">
               <div class="mdl-mega-footer--top-section">
                  <div class="mdl-mega-footer--right-section">
                     <a class="mdl-typography--font-light" href="#top">
                     Ir arriba
                     <i class="material-icons">expand_less</i>
                     </a>
                  </div>
               </div>
               <div class="">
                  <p class="mdl-typography--font-light">© 2018 Tudex Networks. All rights reserved.</p>
               </div>
            </footer>
         </div>
      </div>

     
      <a href="cargar/index.php" target="_blank" id="view-source" class="mdl-button mdl-js-button  mdl-button--fab mdl-button--colored mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"><i class="material-icons">add</i></a>
      <script src="res/material.js"></script>
   </body>
</html>