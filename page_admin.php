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
          </div></li>
          <li><a href="#!">Setting User</a></li>
          <li><a id="logout" href="logout.php">Log Out</a></li>
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
          <div class="col s12 m6">
            <div class="card-panel">
              <span class="h1">Pembuatan User</span>
              <div class="card-content white-text">
                <form action="" method="post">
                <div class="input-field">
                  <input id="id" type="number" name="id" class="validate">
                  <label for="id">ID</label>
                </div>
              <div class="input-field">
                <input id="username" type="text" name="username" class="validate">
                <label for="username">Username</label>
              </div>
              <div class="input-field">
                <input id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <input id="nama" type="text" name="nama" class="validate">
                <label for="nama">Nama Lengkap</label>
              </div>
              <div class="input-field">
                <input id="nomor" type="number" name="nomor" class="validate">
                <label for="nomor">Nomor Telepon</label>
              </div>
                <button class="btn waves-effect waves-light" type="submit" name="submit" style="background-color: #242b3c">Submit</button>
              <b style="color: black"><?php echo $error; ?></b>
              </div>
            </form>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <div class="card-panel">
              <div class="row">
                <div class="col s6 valign-wrapper">
                  <span class="h1">Data User</span>
                </div>
                <div class="col s6">
                  <div class="input-field">
                    <input id="search" type="search" placeholder="Search user...">
                  </div>
                </div>
              </div>

              <?php
              $sqlShow = mysqli_query($db,"select * from user");
              ?>
                <table>
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    while($dataUser = mysqli_fetch_array($sqlShow,MYSQLI_ASSOC))
                    {
                    echo "<tr>";
                    echo "<td>" . $dataUser['id'] . "</td>";
                    echo "<td>" . $dataUser['username'] . "</td>";
                    echo "<td>" . $dataUser['password'] . "</td>";
                    echo "<td>" . $dataUser['nama'] . "</td>";
                    echo "<td>" . $dataUser['nomor'] . "</td>";
                    echo '<td><a class="waves-effect waves-light btn modal-trigger blueblack" href="#modal1">Edit</a></td>';
                    }
                    ?>

                      <div id="modal1" class="modal">
                        <div class="modal-content">
                          <h4>Modal Header</h4>
                          <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                      </div>
                    </tr>
                  </tbody>
                </table>

            </div>
          </div>
        </div>
      </div>



    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
  </body>

</html>
