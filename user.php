<?php
include('session.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/custom.css"  media="screen,projection"/>
    <title>e-Vote</title>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>



  </head>
  <body>
    <header>
      <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
          <div class="user-view">
            <div class="background" style="background-color: #161a2d">
              <!-- <img src="assets/img/office.jpg"> -->
            </div>
            <a href="#user"><img class="circle" src="assets/img/riza.jpg"></a>
            <a href="#name"><span class="white-text name"><?php echo $login_session; ?></span></a>
            <a href="#email"><span class="white-text email">halo@rizasetyawan.com</span></a>
          </div></li>
          <li><a id="logout" href="logout.php">Log Out</a></li>
          <li><a href="#!"></a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"></a>
    </header>

    <main>
      <nav>
        <div class="navbar-fixed">
          <div class="container-fluid">
            <a href="#" class="brand-logo">Logo</a>
            <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">JavaScript</a></li>
            </ul> -->
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <div class="col s4">
            <div class="card sticky-action">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" <img src="http://cdnsecakmi.kaltura.com/p/537811/sp/53781100/thumbnail/entry_id/0_yazr5vgv/version/100041/width/754/height/424">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab"><a class="active" href="#visi">Visi</a></li>
                  <li class="tab"><a href="#misi">Misi</a></li>
                  <li class="tab"><a href="#proker">Proker</a></li>
                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="visi">
                  asdsad</div>
                <div id="misi">Test 2</div>
                <div id="proker">Test 3</div>
              </div>
            </div>
          </div>
          <div class="col s4">
            <div class="card">
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab"><a href="#test4">Test 1</a></li>
                  <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                  <li class="tab"><a href="#test6">Test 3</a></li>
                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="test4">Test 1</div>
                <div id="test5">Test 2</div>
                <div id="test6">Test 3</div>
              </div>
            </div>
          </div>
          <div class="col s4">
            <div class="card">
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab"><a href="#test4">Test 1</a></li>
                  <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                  <li class="tab"><a href="#test6">Test 3</a></li>
                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="test4">Test 1</div>
                <div id="test5">Test 2</div>
                <div id="test6">Test 3</div>
              </div>
            </div>
          </div>
        </div>


      </div>



    </main>
    <footer>

    </footer>

  </body>

</html>
