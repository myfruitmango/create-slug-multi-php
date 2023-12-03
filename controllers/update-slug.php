<?php
include "../mainconfig.php";

if (isset($_POST['request'])) {
  $id   = $_GET['id'];
  $name = htmlspecialchars($_POST['name']);
  $getData    = mysqli_query($call, "SELECT * FROM slug WHERE id='$id'");
  $data       = mysqli_fetch_assoc($getData);
  if ($name == "" || empty($name)) {
    echo "Empty";
  } else {
    if ($data) {
      $convert  = trim($name);
      $convert  = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $convert);
      $convert  = strtolower(trim($convert));
      $convert  = str_replace(' ', '-', $convert);
      $convert  = preg_replace('/\-{2,}/', '-', $convert);
      $slug     = $convert;

      $query  = "UPDATE  slug SET name='$name', slug='$slug', updated_at='$dtme' WHERE uuid='$id'";
      $insert = mysqli_query($call, $query);
      if ($insert) {
        echo "Success";
      } else {
        echo "Error Insert";
      }
    } else {
      header('index?message=404');
    }
  }
} else {
  echo "Click Request";
}
