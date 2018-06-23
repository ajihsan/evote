<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select * from user where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];
   $nama_user = $row['nama'];
   $id_user = $row['id'];

   if($id_user != '1'){
      session_destroy();
      mysqli_close($db);
      header("location:page_landing.php");
   }
?>
