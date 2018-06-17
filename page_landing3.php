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
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </head>
  <body>
    <!-- <h1>Hello, worlad!</h1> -->

      <div class="row" style="position: relative; min-height: 59rem; border: 1px solid;">
        <div class="col align-self-start">
        </div>
        <div class="col align-self-start">
        </div>
        <div class="col sm align-self-center">
          <div class="card" style="width: 24rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="card-body">
              <h5 class="card-title">Sign in</h5>
              <h6 class="card-subtitle mb-2 text-muted">to continue to e-Vote</h6>
              <br>
              <form action = "" method = "post">

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="emailuser" aria-describedby="emailHelp" placeholder="Enter email">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="passworduser" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                </div>
                <div class="row justify-content-end">
                  <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              <span><?php echo $error; ?></span>
              </form>
            </div>
          </div>

        </div>

        <div class="col align-self-end">
        </div>
        <div class="col align-self-end">
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
