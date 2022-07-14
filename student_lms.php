
<?php 

require 'AdminPanel/production/process/connection.php'; 
require 'security.php';

 ?>

<!DOCTYPE html>
<html lang="en">

    <?php require 'include/head.php';?>

  <style type="text/css">
    body{
      background-color: rgb(218,218,218);
    }
    
  @media print  {
    
    button,a{
      visibility: hidden;
    }
  }
  

  </style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Coaching Academy</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Courses</a></li>
          <li><a href="">Teachers</a></li>
          <li><a href="">Academies</a></li>
          <li><a href="">Pricing</a></li> 
          <li><a href="">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="logout.php" class="get-started-btn">Logout</a>

    </div>
  </header><!-- End Header -->

  <br><br><br><br>
 
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3><?php if (isset($_SESSION['STID'])) {
            echo "<span class='text text-warning font-weight-bold'>Student</span> <span class='text text-info'>LMS</span>";
          } ?></h3>
        </div>
        <?php if (isset($_SESSION['STID'])) {
          echo $_SESSION['STNAME'];?>
        <div class="card-body">
          <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                  
                    <a href="lms_detail.php">
                       <div class="card">
                       <div class="card-header bg-dark text text-center text-light"><?php echo $_SESSION['ACname']; ?>
                       </div>
                       <div class="card-body">
                         <img src="AdminPanel/production/uploads/<?php echo $_SESSION['ACADPHOTO']; ?>" class="img-fluid">
                       </div>
                       <div class="card-footer bg-info text text-warning">
                         <?php echo $_SESSION['CNAME']; ?>
                       </div>
                     </div>
                    </a>
                  </div>

            <div class="col-2"></div>
            <div class="col-2">
              <img src="AdminPanel/production/uploads/<?php echo $_SESSION['STPHOTO']; ?>" class="img-thumbnail">
              <h5 class="font-weight-bold text text-dark"><?php echo $_SESSION['STNAME']; ?></h5>
            </div>
          </div>
        </div>
 <?php } ?>
                    <div class="card">
                      <div class="card-header">TimeLine</div>
                      <div class="card-body">
                          <select class="form-control">
                          <option>All</option>
                          <option>Overdue</option>
                          <option>Due Date</option>
                          <option>Next 7 Days</option>
                          <option>Next 30 Days</option>
                          <option>Next 3 Months</option>
                          <option>Next 6 Months</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-2">
                        <input type="date" name="">
                      </div>
                    </div>
<br>
        <div class="card-footer">
          <button onclick="window.print();" class="btn btn-primary">Print</button>
        </div>
      </div>
    </div>

  </body>
</html>