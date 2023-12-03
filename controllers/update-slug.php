<?php
include "../mainconfig.php";
if (isset($_POST['request'])) {
  $uuid   = $_GET['uuid'];
  $name   = htmlspecialchars($_POST['name']);
  if ($name == "" || empty($name)) {
    echo "Empty";
    header('location:../index?response=406');
  } else {
    $getData  = mysqli_query($call, "SELECT * FROM slug WHERE uuid='$uuid'");
    $data     = mysqli_fetch_assoc($getData);
    if ($data) {
      $convert  = trim($name);
      $convert  = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $convert);
      $convert  = strtolower(trim($convert));
      $convert  = str_replace(' ', '-', $convert);
      $convert  = preg_replace('/\-{2,}/', '-', $convert);
      $slug     = $convert;

      $query  = "UPDATE slug SET name='$name', slug='$slug', updated_at='$dtme' WHERE uuid='$uuid'";
      $insert = mysqli_query($call, $query);
      if ($insert) {
        header('location:../index?response=200');
      } else {
        header('location:../index?response=500');
      }
    } else {
      header('location:../index?response=404');
    }
  }
} else {
  header('location:../index?response=400');
}
