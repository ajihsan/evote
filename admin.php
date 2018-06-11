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
    <link type="text/css" rel="stylesheet" href="assets/css/custom.css"  media="screen,projection"/>
    <title>e-Vote</title>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    });
    </script>

    <script>
    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
          alert("Ready");
          console.log(modal, trigger);
        },
        complete: function() { alert('Closed'); } // Callback for Modal close
      }
    );
    </script>


  </head>
  <body>
    <header>
      <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="assets/img/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="assets/img/riza.jpg"></a>
            <a href="#name"><span class="black-text name">Riza Setyawan Amadhy</span></a>
            <a href="#email"><span class="black-text email">halo@rizasetyawan.com</span></a>
          </div></li>
          <li><a href="#!">First Sidebar Link</a></li>
          <li><a href="#!">Second Sidebar Link</a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"></a>
    </header>

    <main>
      <nav>
        <div class="navbar-fixed teal">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">


          <div class="col s6">
            <div class="card-panel">
              <span class="h4">Pembuatan User</span>
              <div class="card-content white-text">
              <div class="input-field">
                <input id="username" type="text" class="validate">
                <label for="email">Username</label>
              </div>
              <div class="input-field">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
              </div>
            </div>
          </div>


          <div class="col s6">
            <div class="card-panel">
              <span class="h4">Data User</span>

                <table>
                  <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit</a></td>
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
