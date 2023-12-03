<?php
include "../mainconfig.php";

$id         = $_GET['id'];
$getData    = mysqli_query($call, "SELECT * FROM slug WHERE id='$id'");
$data       = mysqli_fetch_assoc($getData);

if ($data) {
  $querydelete    = mysqli_query($call, "DELETE FROM slug WHERE id='$id'");
  if ($querydelete) {
    header('index?message=success');
  } else {
    header('index?message=failed');
  }
} else {
  header('index?message=404');
}
