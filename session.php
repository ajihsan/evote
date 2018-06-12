<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select * from user where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];
   $nama_user = $row['nama'];

   if(!isset($login_session)){
      mysqli_close($db);
      header("location:index.php");
   }
?>
