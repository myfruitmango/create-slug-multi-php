<?php
include "../mainconfig.php";

if (isset($_POST['request'])) {
  $getName = $_POST['name'];
  if ($getName == "" || empty($getName)) {
    header('location:../index?response=406');
  } else {
    $arrayName = implode(', ', array_values($getName));
    for ($i = 0; $i < count($getName); $i++) {
      $convert = trim($getName[$i]);
      $convert = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $convert);
      $convert = strtolower(trim($convert));
      $convert = str_replace(' ', '-', $convert);
      $convert = preg_replace('/\-{2,}/', '-', $convert);

      $slug = $convert;
      $name = mysqli_real_escape_string($call, $getName[$i]);

      $query  = "INSERT INTO slug (uuid, name, slug, created_at) VALUES (UUID(), '$name', '$slug', '$dtme')";
      $insert = mysqli_query($call, $query);
      if (!$insert) {
        header('location:../index?response=500');
        exit;
      }
    }
  }
  header('location:../index?response=200');
} else {
  header('location:../index?response=400');
}
