<?php 

include 'config.php';

error_reporting(0);

session_start();
if (isset($_GET['log'])) {
  $username = $_GET['username'];
  $lpassword = md5($_GET['lpassword']);

  $msql = "SELECT * FROM users WHERE email='$username' AND password='$lpassword'";
  $lresult = mysqli_query($con, $msql);
  if ($lresult->num_rows > 0) {
    $row = mysqli_fetch_assoc($lresult);
    $_SESSION['user'] =[
      "fname" => $row['fname'],
      "lname" => $row['lname'],
      "email" => $row['email'],
      "phone" => $row['phone'],
      "cpass" => $row['password']
    ];
    header("Location: account.php?q=1");
  } else {
    $_SESSION['messagepas'] = 'Incorrect email or password!';
    header('Location: login.php');
  }
}


?>