<?php


//$db_hostname = 'localhost:3306';
  $db_hostname = 'mysql.hostinger.in';
  $db_database = 'u175815902_integ';
  $db_username = 'u175815902_root';
  $db_password = 'Integer26web';


/*$db_hostname = 'localhost';
  $db_database = 'u175815902_innov';
  $db_username = 'u175815902_admin';
  $db_password = 'seekme_12345';
  */
  $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

  if ($conn->connect_error){
      die($conn->connect_error);
  }
?>