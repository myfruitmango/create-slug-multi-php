<?php
include "../mainconfig.php";

if (isset($_POST['request'])) {
  $uuid     = $_GET['uuid'];
  $getData  = mysqli_query($call, "SELECT * FROM slug WHERE uuid='$uuid'");
  $data     = mysqli_fetch_assoc($getData);
  if ($data) {
    $delete = mysqli_query($call, "DELETE FROM slug WHERE uuid='$uuid'");
    if ($delete) {
      header('location:../index?response=200');
    } else {
      header('location:../index?response=500');
    }
  } else {
    header('location:../index?response=404');
  }
} else {
  header('location:../index?response=400');
}
