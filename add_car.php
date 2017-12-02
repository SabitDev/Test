<?php

require('db_connect.php');

$brand = $model = $date = $category = $owner = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $brand = test_input($_POST["brand"]);
  $model = test_input($_POST["model"]);
  $date  = test_input($_POST["date"]);
  $price = test_input($_POST["price"]);
  $owner = test_input($_POST["owner"]);
}

if (date<1990) {
  $category ="До 1990 года выпуска";
} elseif (date>=1990 && date<2000){
  $category ="От 1990 до 2000 года выпуска";
} elseif (date>=2000 && date<2010) {
  $category ="От 2000 до 2010 года выпуска";
} elseif (date>=2010) {
  $category ="После 2010 года выпуска";
}else{
  echo "Error";
}


$sql = "INSERT INTO carslist ( brend, model, category, price, owner) VALUES ( '".$brand."', '".$model."', '".$category."', '".$price."', '".$owner."')";

$res = mysql_query($sql);

if ($res){
  echo "You added new car in database";
} else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

mysqli_close($conn);
?>