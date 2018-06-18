<?php
include('inputUser.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
  </head>
  <body>


    <!-- SIDEBAR -->
    <header>
      <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
          <div class="user-view">
            <div class="background blueblack" >
              <!-- <img src="assets/img/office.jpg"> -->
            </div>
            <a href="#user"><img class="circle" src="img/riza.jpg"></a>
            <a href="#name"><span class="white-text name"><?php echo $nama_user; ?></span></a>
            <a href="#email"><span class="white-text email"><?php echo $login_session; ?></span></a>
          </div></li>
          <li class="active"><a class="waves-effect" href="#settinguser">Setting User</a></li>
          <li><a class="waves-effect"href="#test">Test</a></li>
          <li><a id="logout" href="logout.php">Log Out</a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"></a>
    </header>


    <!-- NAVBAR -->
    <main>

        <div class="navbar-fixed">
          <nav>
            <div class="container-fluid">
              <a href="#" class="brand-logo">Logo</a>
              <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
              </ul> -->
            </div>
          </nav>
        </div>




      <!-- KONTEN TENGAH -->






    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
  </body>

</html>
