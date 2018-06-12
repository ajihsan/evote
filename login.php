<?php
include("config.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     if(empty($_POST['emailuser']) || empty($_POST{'passworduser'})) {
       $error = "Email atau Password tidak valid";
     }
     else {
      // username and password sent from form
      $myusername = mysqli_real_escape_string($db,$_POST['emailuser']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passworduser']);

      $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        // cek user atau admin
        $logged_in_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($logged_in_user['id'] == 1) {
          $_SESSION['login_user'] = $myusername;

          header("location: page.php");
        }
        elseif ($logged_in_user['id'] == 99) {
          $_SESSION['login_user'] = $myusername;

          header("location: admin.php");
        }
      }

      else {
         $error = "Email atau Password tidak valid";
      }
      mysqli_close($db);
      }
   }
?>
