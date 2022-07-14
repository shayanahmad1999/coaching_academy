<?php 

require 'AdminPanel/production/process/connection.php'; 

  if(isset($_POST['student']) && $_POST['student'] == 'login'){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from student_record where Email = '$email' and Password = '$password'";
    $go = mysqli_query($connect,$query);

    $row = mysqli_num_rows($go);

    if ($row > 0) {

      $student = mysqli_fetch_array($go);

        $_SESSION['STNAME'] = $student['Name'];
        $_SESSION['STID'] = $student['Students_ID'];
        $_SESSION['STEMAIL'] = $student['Email'];
        $_SESSION['STPHOTO'] = $student['photo'];
        $_SESSION['ACname'] = $student['Academies_ID'];
        $_SESSION['ACADPHOTO'] = $student['photo'];
        $_SESSION['CNAME'] = $student['Course_ID']; 

        header('location:student_lms.php?success');
        
    }
    else{
      header('location:login.php?error');
      exit();

    }  
  }

?>


<!DOCTYPE html>
<html>
  
<?php require 'include/head.php' ?>


 <style type="text/css">
   body{
    background-color: rgb(218,218,218);
   }
   .city{
    margin-top: 90px;
    text-align: center;
    margin-left: 500px;
    width:1100px;
   }
   @media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}

 </style>
</head>
<body>

<?php require 'include/header.php' ?>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
Register Now
</button>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Registration Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
           <div class="x_content">

      work

           </div>
         </div>
       </div>
     </div>


              
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> -->

<br><br>
<div class="city">
  <div class="row">
    <div class="col4"></div>
    <div class="col4"></div>
    <div class="col-lg-4">
      <form action="login.php" method="post">
        <div class="card">
          <div class="card-header bg-secondary"><h6 class="text font-weight-bold" style="font-size:30px;">Login <span class="text text-warning">Here</span></h6></div>
          <div class="card-body shadow bg-light">
            <div class="row">
              <div class="col-12">
                <input type="email" name="email" placeholder="Email" class="form-control">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-12">
                <input type="password" name="password" placeholder="Password" class="form-control">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4">
                <a href="student_profile.php"><input type="submit"class="form-control btn btn-success"></a>
              </div>
              <div class="col-4">
                <input type="reset"class="form-control btn btn-warning">

                <input type="hidden" name="student" value="login">

              </div>
            </div>
          </div>
      <div class="card-footer">
        <div>
          <h6 class="text text-dark font-weight-bold shadow"><i class="fa fa-paw"></i> Coaching Academy</h6>
            <span style="font-size:9px; color:blue;" class="font-weight-bold">©2021 All Rights Reserved. Coaching Academy!. Privacy and Terms</span>
        </div>
      </div>
        </div>
      </form>
    </div>
  </div>



</body>
</html>