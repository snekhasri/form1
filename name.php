<?php

$nameErr = $emailErr = $genderErr = $websiteErr = $phoneErr = $addErr = $dobErr ="";
$name = $email = $gender = $comment = $website =  $phone = $add = $dob =
"";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  ?>
