<?php
include('login.php'); // Includes Login Script
?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom2.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </head>
  <body>
    <div class="row atcenter">
        <div class="">
          <div class="card-panel z-depth-4 hoverable" style="opacity: 0.9;">
            <div class="row">
              <form action="" method="post">

                <div class="form-group">
                  <div class="input-field">
                    <input id="exampleInputEmail1" class="form-control" name="emailuser" aria-describedby="emailHelp" type="text" class="validate">
                    <label for="exampleInputEmail1">Username</label>
                  </div>

                  <div class="input-field">
                    <input id="exampleInputPassword1" class="form-control" name="passworduser" type="password" class="validate">
                    <label for="exampleInputPassword1">Password</label>
                  </div>

                  <div class="row">
                    <button class="btn-small waves-effect waves-light red right hoverable" type="submit">Login</button>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
