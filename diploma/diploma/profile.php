<?php

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['savechange'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $sql = "UPDATE users SET fname = '$fname', lname ='$lname', phone = '$phone' WHERE email = '$email'";
  $mysql = "SELECT * FROM users WHERE email='$email'";
  $res = mysqli_query($con, $sql);
  $pes = mysqli_query($con, $mysql);
  if ($res) {
    $_SESSION['msgsv'] = 'Data changed successfully!';
    $row = mysqli_fetch_assoc($pes);
    $_SESSION['user'] =[
      "fname" => $row['fname'],
      "lname" => $row['lname'],
      "phone" => $row['phone'],
      "email" => $row['email']
    ];
  }
}

if (isset($_POST['changepass'])) {
  $email = $_POST['email'];
  $oldpass = md5($_POST['oldpass']);
  $newpass = md5($_POST['newpass']);
  $conpass = md5($_POST['conpass']);


  
  if ($oldpass == $_SESSION['user']['cpass']) {
    if ($newpass == $conpass) {
      $sql = "UPDATE users SET password = '$newpass' WHERE email = '$email'";
      $result = mysqli_query($con, $sql);
      if ($result) {
        $_SESSION['msgcom'] = 'Password changed!';
      }
    }else{
      $_SESSION['msg'] = 'Password mismatch!';
    }
  }else{
    $_SESSION['message'] = 'Incorrect password!';
  } 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Account</title>
  <link rel="shortcut icon" type="favicon.ico" href="AviaTrip-icon-1024x1024.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
  <div class="container">
    <div class="row flex-lg-nowrap">
      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <img width="140px" height="140px" src="images/person.png" alt="">
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <h1 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="margin-top: 40px">
                        <?php echo $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; ?>
                      </h1>
                    </div>
                  </div>
                  <form action="" method="POST">
                    <div class="tab-content pt-3">
                      <div class="tab-pane active">
                        <form class="form">
                          <div class="row">
                            <div class="col">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="firstname" name="fname" placeholder="" value="<?php if($_SESSION['user']){ echo $_SESSION['user']['fname'];} ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="lastname" name="lname" placeholder="" value="<?php if($_SESSION['user']){ echo $_SESSION['user']['lname'];} ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="" value="<?php if($_SESSION['user']){ echo $_SESSION['user']['email'];} ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="phone" name="phone" placeholder="" value="<?php if($_SESSION['user']){ echo $_SESSION['user']['phone'];} ?>">
                                    <p class="msg" style="color: green">
                                      <?php if ($_SESSION['msgsv']) { echo $_SESSION['msgsv'];} unset($_SESSION['msgsv']);?>
                                    </p>
                                  </div>
                                  <div class="row">
                                    <div class="col d-flex justify-content-end">
                                      <button class="btn btn-primary" name="savechange" style="margin-left: 395px">Save Changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Current Password</label>
                                    <input class="form-control" type="password" placeholder="••••••" name="oldpass">
                                    <p style="color: red"><?php if ($_SESSION['message']) { echo $_SESSION['message'];} unset($_SESSION['message']);?></p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>New Password</label>
                                    <input class="form-control" type="password" placeholder="••••••" name="newpass">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                    <input class="form-control" type="password" placeholder="••••••" name="conpass">
                                    <p class="msg" style="color: red"><?php if ($_SESSION['msg']) { echo $_SESSION['msg'];} unset($_SESSION['msg']); ?></p>
                                    <p class="msg" style="color: green">
                                      <?php if ($_SESSION['msgcom']) { echo $_SESSION['msgcom'];} unset($_SESSION['msgcom']);?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col d-flex justify-content-end">
                                  <button class="btn btn-primary" name="changepass">Change Password</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>  
                    </div>
                    <a href="account.php?q=1" style="text-decoration: none;"><button type="submit" class="btn btn-primary btn-block py-2" style="margin-top: 20px;">&#8592;Back to Main page</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="navbar.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>s
</body>
</html>