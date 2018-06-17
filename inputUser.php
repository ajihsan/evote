<?php
include('sessionAdmin.php');

$error='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['id']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['nama']) || empty($_POST['nomor'])) {
    $error = "Lengkapi form";
  }
  else {

  $id = mysqli_real_escape_string($db,$_POST['id']);
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $nama = mysqli_real_escape_string($db,$_POST['nama']);
  $nomor = mysqli_real_escape_string($db,$_POST['nomor']);

  $sqlCheck = "SELECT username FROM user WHERE username = '$username'";
  $result = mysqli_query($db,$sqlCheck);
  $count = mysqli_num_rows($result);

  if ($count == 0) {
    $sqlInput = "INSERT INTO user VALUES ($id, '$username', '$password', '$nama', $nomor)";
    $result = mysqli_query($db,$sqlInput);
    $error = 'Input Sukses';
  }
  else {
    $error = 'Username telah dibuat sebelumnya';
  }

  }
}
?>
