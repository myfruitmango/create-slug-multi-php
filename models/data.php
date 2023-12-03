<?php

function getData()
{
  global $call;
  return mysqli_query($call, "SELECT * FROM slug");
}
