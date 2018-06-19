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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
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
      <div class="container-fluid" id="settinguser">
        <div class="row">
          <div class="col s12">
            <div class="card-panel col s12">
              <span class="h1"> Pembuatan User</span>
              <div class="card-content white-text">
                <form action="" method="post">
                  <div class="col s6">
                    <div class="col s12">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col s6">
                      <div class="input-field">
                        <input id="username" type="text" name="username" class="validate">
                        <label for="username">Username</label>
                      </div>
                    </div>
                    <div class="col s6">
                      <div class="input-field">
                        <input id="nama" type="text" name="nama" class="validate">
                        <label for="nama">Nama Lengkap</label>
                      </div>
                    </div>
                    <div class="col s6">
                      <div class="input-field">
                        <input id="nomor" type="number" name="nomor" class="validate">
                        <label for="nomor">Nomor Telepon</label>
                      </div>
                    </div>
                    <div class="col s6">
                      <div class="input-field">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="col s6 inline">
                      <p class="">

                       <label>
                         <input name="group1" type="radio" checked />
                         <span>Laki Laki</span>
                       </label>
                       <label>
                         <input name="group1" type="radio" />
                         <span>Perempuan</span>
                       </label>
                     </p>
                    </div>
                  </div>

                  <div class="col s6">
                    <div class="col s12">
                      <input type="text" class="datepicker">
                    </div>
                    <div class="col s6">
                      <div class="input-field">
                        <select class="">
                          <option value="" disabled selected>Choose your option</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                        <label>Materialize Select</label>
                      </div>

                    </div>

                  </div>


                </form>
              </div>
            </div>
          </div>
        </div>



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

                <table>
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <!-- MENAMPILKAN DATABASE -->
                    <?php
                    $sqlShow = mysqli_query($db,"SELECT * FROM user");
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



      <!-- PIE CHART -->
      <div class="container-fluid">
        <div class="row">
          <div class="col s6">
            <div class="card"> <!--warna-->
              <div class="card-content black-text">
                <div class="chart-responsive">
                  <canvas id="myChart" height="150"></canvas>
                  <script type="text/javascript">
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart (ctx,{
                      type:'pie',
                      data:{
                        labels:  ["Rindu", "Hasanah", "Asyik", "DM4Jabar"],
                        datasets:[{
                          label: "# of votes",
                          <?php
                          $sqlHasil = mysqli_query($db,"SELECT SUM(CASE WHEN id_paslon = 1 THEN 1 ELSE 0 END) AS HASIL_1,
                                      SUM(CASE WHEN id_paslon = 2 THEN 1 ELSE 0 END) AS HASIL_2,
                                      SUM(CASE WHEN id_paslon = 3 THEN 1 ELSE 0 END) AS HASIL_3,
                                      SUM(CASE WHEN id_paslon = 4 THEN 1 ELSE 0 END) AS HASIL_4
                                      FROM hasil_voting");

                          while ($dataHasil = mysqli_fetch_array($sqlHasil, MYSQLI_ASSOC)) {
                          echo 'data: ['. $dataHasil['HASIL_1'] .','. $dataHasil['HASIL_2'] .','. $dataHasil['HASIL_3'] .','. $dataHasil['HASIL_4'] .'],';
                          }
                          ?>
                          backgroundColor:[
                          'rgba(135, 206, 235, 0.6)',
                          'rgba(255, 182, 193, 0.6)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)'
                        ],

                        }]
                      },
                      options: {
                        title:{
                        display:true,
                        text:'Hasil Voting Pilkada Jabar',
                        textSize:25
                      },
                      legend:{
                        position:'bottom',
                        labels:{
                          fontColor:'#000'
                        }
                      }
                      }
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>

          <div class = "col s6">
          </div>
        </div><!-- endchart -->
      </div>




    </main>
    <footer class="page-footer blueblack">
      <div class="container-fluid">
              <div class="col s12 center">
                <a class="h5 grey-text text-lighten-3 col s3" href="#!">About</a>
                <a class="h5 grey-text text-lighten-3 col s3" href="#!">Legal Information</a>
                <a class="h5 grey-text text-lighten-3 col s3" href="#!">Contact</a>
                <a class="h5 grey-text text-lighten-3 col s3" href="#!">Term Of Service</a>

              </div>

          </div>
          <div class="footer-copyright blueblack lighten-3">
            <div class="container center">
            Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.<br> © 2018 Evote All right reserved
            </div>
          </div>

    </footer>
  </body>

</html>
