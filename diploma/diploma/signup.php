<?php  

include 'config.php';

error_reporting(0);

session_start();

if (isset($_GET['sign'])) {
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $phone = $_GET['phone'];
  $email = $_GET['email'];
  $password = md5($_GET['password']);
  $cpassword = md5($_GET['cpassword']);


  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows < 1) {
      $mysql = "INSERT INTO users (fname, lname, email, phone, password)
      VALUES ('$fname','$lname', '$email', '$phone', '$password')";
      $result = mysqli_query($con, $mysql);
      if ($result) {
        $fname = "";
        $lname = "";
        $phone = "";
        $email = "";
        $_GET['password'] = "";
        $_GET['cpassword'] = "";
        header('Location: login.php');
        $_SESSION['msgcomp'] = 'Registration completed successfully!';
      } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
        header('Location: login.php');
      }
    } else {
      $_SESSION['msgemail'] = 'Email already registered!';
      header('Location: index.php');
    }
  } else {
    $_SESSION['msg'] = 'Password mismatch!';
    header('Location: index.php');
  }
}

?>