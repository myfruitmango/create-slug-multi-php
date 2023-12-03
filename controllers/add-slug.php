<?php
include "../mainconfig.php";

if (isset($_POST['request'])) {
  $name = htmlspecialchars($_POST['name']);
  if ($name == "" || empty($name)) {
    echo "Empty";
  } else {
    $convert  = trim($name);
    $convert  = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $convert);
    $convert  = strtolower(trim($convert));
    $convert  = str_replace(' ', '-', $convert);
    $convert  = preg_replace('/\-{2,}/', '-', $convert);
    $slug     = $convert;

    $query  = "INSERT slug (uuid, name, slug, created_at) VALUES (UUID(), '$name', '$slug', '$dtme')";
    $insert = mysqli_query($call, $query);
    if ($insert) {
      echo "Success";
    } else {
      echo "Error Insert";
    }
  }
} else {
  echo "Click Request";
}
