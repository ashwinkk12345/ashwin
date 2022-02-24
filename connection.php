<?php

  $access_var_p = "mypassword";
  $access_var_u = "ashwinkk123";

  $username = "root";
  $password = "";
  $server = 'localhost';
  $database = 'ashwindb';

  $con = mysqli_connect($server, $username, $password, $database);

  $db = mysqli_select_db($con, $database);
  
?>