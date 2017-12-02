<?php
  $servername = "localhost";
  $username = "admin";
  $password = "";

  mysql_set_charset("utf8");

  $conn = mysqli_connect($servername, $username, $password);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  $select_db = mysql_select_db('test');
?>