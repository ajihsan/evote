<?php
include ('config.php');

if(isset($_POST['mysubmit']) && !empty($_POST["mysubmit"])) {

  session_start();

  $user_check = $_SESSION['login_user'];
  $ses_sql = mysqli_query($db,"select * from user where id = '$user_check' ");
  $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

  $login_session = $row['username'];

  $duplication_check = mysqli_query($db,"SELECT * FROM hasil_voting WHERE username = '$login_session' ");
  $count_result = mysqli_num_rows($duplication_check);

  $nomor_voting = $_POST['mysubmit'];

  if ($count_result == 1) {
    $update_voting = mysqli_query($db,"UPDATE hasil_voting SET id_paslon = $nomor_voting WHERE username = '$login_session' ");
    session_destroy();
    header("Location: page_landing.php");
  }
  elseif ($count_result == 0) {
    $insert_voting = mysqli_query($db,"INSERT INTO hasil_voting (username,id_paslon) VALUES ('$login_session', $nomor_voting)");
    session_destroy();
    header("Location: page_landing.php");
  }
}
?>
