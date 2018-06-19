<?php
include('sessionUser.php');
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
    <script type="text/javascript" src="js/custom.js"></script>
  </head>
  <body>

<!-- NAViGATION BAR  -->
      <nav>
        <div class=" container-fluid navbar-fixed blueblack">
          <div class="container-fluid">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><p>Selamat Datang, <??><?php echo $nama_user;?></p></li>
              <li><a class="waves-effect waves-light btn-small blue" id="logout" href="logout.php">Log Out</a></li>
            </ul>
          </div>
        </div>
      </nav>


<!-- JUDUL  -->
      <h4 class="center blueblack-text"> Pemilu: Kepala Daerah Jawa Barat</h4>
      <div class="container-fluid">
        <div class="row">
        <form action="voting.php" method="post">

<!-- CARD KEPALA DAERAH  -->
        <?php
        $sql = "SELECT * FROM paslon_jabar";
        $sqlShow = mysqli_query($db,$sql);

        $x = 1;
        while($dataPaslon = mysqli_fetch_array($sqlShow,MYSQLI_ASSOC))
        {
        echo '<div class="col s3">';
          echo '<div class="card-panel grey lighten-5 z-depth-1 hoverable">';
            echo '<div class="card-image waves-effect waves-block waves-light">';
              echo '<img class="responsive-img" src="'. $dataPaslon['foto'] .'">';
            echo '</div>';
            echo '<div class="row">';

            echo '</div>';
            echo '<div class="card-content center">';
              echo '<h5 class="card-title blue-text activator center">'. $dataPaslon['slogan'] .'</h5>';
              echo '<p>Calon Gubernur: '. $dataPaslon['cagub'] .'</p>';
              echo '<p>Calon Wakil Gubernur: '. $dataPaslon['cawagub'] .'</p>';
            echo '</div>';
            echo '<div class="card-action center">';
              //MODAL TRIGGER
              echo '<a class="btn-small waves-effect waves-light modal-trigger blueblack" href="#modal'. $x .'">INFO</a>';
              //MODAL CONTENT
              echo '<div id="modal'. $x .'" class="modal">';
                echo '<div class="modal-content">';
                  echo '<h4 class="blue-text">'. $dataPaslon['slogan'] .'</h4>';
                  echo '<!-- <div class="row"> -->';
                    echo '<!-- <div class="col s12"> -->';
                      echo '<ul class="tabs">';
                        echo '<li class="tab col s6"><a class="active" href="#visi'. $x .'">Visi</a></li>';
                        echo '<li class="tab col s6"><a href="#misi'. $x .'">Misi</a></li>';
                      echo '</ul>';
                    echo '<!-- </div> -->';
                    echo '<div class="col s12" id="visi'. $x .'">'. $dataPaslon['visi'] .'</div>';
                    echo '<div class="col s12" id="misi'. $x .'">'. $dataPaslon['misi1'] . '<br>' . $dataPaslon['misi2'] . '<br>' . $dataPaslon['misi3'] . '<br>' . $dataPaslon['misi4'] . '<br>' . $dataPaslon['misi5'] . '<br>' .'</div>';
                  echo '<!-- </div> -->';
                echo '</div>';
                echo '<!-- <div class="modal-footer">';
                  echo '<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>';
                echo '</div> -->';
              echo '</div>';

              echo '<button class="btn-small waves-effect waves-light red" type="submit" name="mysubmit" value="'. $x .'">Vote</button>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
        $x++;
        }
        ?>

        </form>




          <!-- <div class="col s3 offset-s9">
            <div class="card-panel grey lighten-5 z-depth-1 hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="responsive-img" src="http://cdnsecakmi.kaltura.com/p/537811/sp/53781100/thumbnail/entry_id/0_yazr5vgv/version/100041/width/754/height/424">
              </div>
              <div class="row">

              </div>
              <div class="card-content center">
                <h5 class="card-title blue-text activator center">George Harrison</h5>
                <p>Hey I'm George, i want to be president next week , i need your vote but i cant give u money dude fuck u </p>
              </div>
              <div class="card-action center">
                <button class="btn-small waves-effect waves-light blueblack" type="submit" name="submit">Apa aja</button>
                <button class="btn-small waves-effect waves-light red" type="submit" name="submit">Vote</button>
              </div>
            </div>
          </div> -->

<!-- KELAR CARD KEPALA DAERAH  -->
        </div>
      </div>


  </body>

</html>
