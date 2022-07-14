<?php

  require 'process/connection.php';

if (isset($_POST['Admin']) && $_POST['Admin'] == 'login') {
    
    $email = $_POST['email'];

    $password =  $_POST['password'];

    $query = "select * from admin where email = '$email' and password = '$password'";

    $done = mysqli_query($connect,$query);

    $num = mysqli_num_rows($done);

    if ($num > 0){

      $admin = mysqli_fetch_array($done);

      $_SESSION['ANAME'] = $admin['User_Name'];
      $_SESSION['AaID'] = $admin['Admin_ID'];
      $_SESSION['AEMAIL'] = $admin['Email'];
      $_SESSION['APHOTO'] = $admin['Photo'];

      header('location:index.php');
      exit();
    }
    else{
      header('location:login.php?error');
      exit();
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coaching Academy! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="hidden" name="Admin" value="login">
                <a class="btn btn-default submit"><button type="submit" class="btn btn-success">Log in</button></a>
                <a class="reset_pass" href="#">Lost your password?</a>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <!-- <a href="#signup" class="to_register"> Create Account </a> -->
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Coaching Academy</h1>
                  <p>©2021 All Rights Reserved. Coaching Academy!. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="Admin/Create_Account_Insertion.php" method="post" enctype="multipart/form-data">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
               <div>
                <input type="file" class="form-control" name="photo" required="" />
              </div>

              <div>
                <a class="btn btn-default submit"><button type="submit" class="btn btn-success">Submit</button></a>
                <input type="hidden" name="Admin" value="account" >
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
