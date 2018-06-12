<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
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
            <a href="#name"><span class="white-text name"><?php echo $nama_user; ?></span></a>
            <a href="#email"><span class="white-text email"><?php echo $login_session; ?></span></a>
          </div>
        </li>
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
          <div class="col s3">
            <div class="card hoverable">
              <div class="card-image">
                <img src="http://cdnsecakmi.kaltura.com/p/537811/sp/53781100/thumbnail/entry_id/0_yazr5vgv/version/100041/width/754/height/424">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4 center">George Harrison</span>
                <button class="btn-small waves-effect waves-light" type="submit" name="submit" style="background-color: #242b3c">Vote</button>
              </div>
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab"><a class="active" href="#visi">Visi</a></li>
                  <li class="tab"><a href="#misi">Misi</a></li>
                  <li class="tab"><a href="#proker">Proker</a></li>
                </ul>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>

              <div class="card-content grey lighten-4">
                <div id="visi">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <div id="misi">
                  Remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
                </div>
                <div id="proker">
                  As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                </div>
              </div>
            </div>
          </div>
          <div class="col s3">
          </div>
          <div class="col s3">
          </div>
          <div class="col s3">
          </div>
        </div>
      </div>
    </main>
    <footer>

    </footer>

  </body>

</html>
