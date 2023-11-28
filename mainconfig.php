<?php

date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '1024M');
$date = date('Y-m-d');
$time = date('H:i:s');
$dtme = date('Y-m-d H:i:s');

$req = [
  'host' => 'localhost',
  'user' => 'root',       # Database Username
  'pass' => '',           # Database Password
  'name' => 'example'     # Database Name
];

$call = mysqli_connect($req['host'], $req['user'], $req['pass'], $req['name']);

if ($call->connect_error) {
  die("Connection failed: " . $call->connect_error);
  echo "Server Sedang ada gangguan";
}

function base_url($uri = '')
{
  return  'controllers/' . $uri;
}
