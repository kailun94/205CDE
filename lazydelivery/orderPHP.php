<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])=="" ){
  header("Location: index.php");
 }
 include_once 'dbconnect.php';
 
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
 $error = false;

 if ( isset($_POST['order-submit']) ) {
  
  // clean user inputs to prevent sql injections
  $firstname = trim($_POST['firstname']);
  $firstname = strip_tags($firstname);
  $firstname = htmlspecialchars($firstname);
  
  $lastname = trim($_POST['lastname']);
  $lastname = strip_tags($lastname);
  $lastname = htmlspecialchars($lastname);
  
  $gender = trim($_POST['gender']);
  $gender = strip_tags($gender);
  $gender = htmlspecialchars($gender);
  
  $phone = trim($_POST['phone']);
  $phone = strip_tags($phone);
  $phone = htmlspecialchars($phone);
  
  $address = trim($_POST['address']);
  $address = strip_tags($address);
  $address = htmlspecialchars($address);
  
  $order = trim($_POST['order']);
  $order = strip_tags($order);
  $order = htmlspecialchars($order);
  
  $user = $userRow['userId'];
  
  $message = trim($_POST['message']);
  $message = strip_tags($message);
  $message = htmlspecialchars($message);
  
  // basic name validation
  if (empty($firstname) || empty($lastname)) {
   $error = true;
   $nameError = "Please enter your name.";
  } else if (strlen($firstname)<2 || strlen($lastname)<2) {
   $error = true;
   $nameError = "Name must have at least 2 characters.";
  } 
  
  // basic phone validation
   if (empty($phone)) {
   $error = true;
   $phoneError = "Please enter your phone number.";
  } else if (strlen($phone) !=10) {
   $error = true;
   $phoneError = "Phone number must have 10 digits.";
  } 
  
   // basic address validation
  if (empty($address)) {
   $error = true;
   $addressError = "Please enter address.";
  }
  
  // if there's no error, continue to submit
  if( !$error ) {
   
   $query = "INSERT INTO orders(firstname,lastname,gender,phoneNUmber,address,foodCode,remark,userId) VALUES('$firstname','$lastname','$gender','$phone','$address','$order','$message','$user')";
   $res = mysql_query($query);
    
   if ($res) {
    echo "<script type='javascript'>alert('Order successfully sent !');</script>";
	header("Location: menu.php");
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
  
  
 }
?>