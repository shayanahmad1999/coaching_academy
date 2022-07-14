<?php

require '../AdminPanel/production/process/connection.php';
require 'security.php';



?>

<!doctype html>
<html class="no-js" lang="en">

<?php require 'include/head.php'; ?>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <?php require 'include/sidebar.php'; ?>

  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <?php require 'include/header.php'; ?>

    <div class="product-status mg-b-30">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
              <?php

              if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                echo "<h2 class='alert alert-dismissible'>
                                    <button type='button' class='close'data-dismiss='alert'>&times;</button>Congratulation! Your Record Delete Successfully</h2>";
              } elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                echo "<h4 class='alert alert-dismissible'>
                                    <button type='button' class='close'data-dismiss='alert'>&times;</button>Sorry! Your Record is not Delete Successfully</h4>";
              } else {
                echo "<h4>Academy List</h4>";
              }

              ?>
              <div class="add-product">
                <!-- <a href="product-edit.html">Add Product</a> -->
              </div>
              <table>
                <tr>
                  <th>Student ID</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Password</th>
                  <th>Telephone</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                <?php
                $Academy_id =  $_SESSION['ACID'];

                $query = "select * from student_record where Academies_ID = '$Academy_id' and Course_ID = course_Id";

                $go = mysqli_query($connect, $query);

                $a = 1;
                while ($show = mysqli_fetch_array($go)) {
                ?>
                  <tr>
                    <td><?php echo $a; ?></td>
                    <td><img src="../AdminPanel/production/uploads/<?php echo $show['photo']; ?>" alt="" /></td>
                    <td><?php echo $show['Name']; ?></td>
                    <td><?php echo $show['Email']; ?></td>
                    <td><?php echo $show['Phone']; ?></td>
                    <td><?php echo $show['Password']; ?></td>
                    <td><?php echo $show['Telephone']; ?></td>
                    <td><?php echo $show['Gender']; ?></td>
                    <td><?php echo $show['Address']; ?></td>

                    <td>

                      <a href="payment.php?student_id=<?php echo $show['Students_ID']; ?>&&academy_id=<?php echo $show['Academies_ID']; ?>&&course_id=<?php echo $show['Course_ID']; ?>">
                        <button data-toggle="tooltip" title="Payment" class="pd-setting-ed"><i class="fa fa-usd" aria-hidden="true"></i></button>
                      </a>

                      <a href="edit.php?id=<?php echo $show['Students_ID']; ?>"> <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                      <a href="process/delete.php?id=<?php echo $show['Students_ID']; ?>" onclick=" return confirm('are you sure') "><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>

                    </td>
                  </tr>
                <?php $a++;
                } ?>
              </table>
              <div class="custom-pagination">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-copy-right">
              <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jquery
		============================================ -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="js/metisMenu/metisMenu.min.js"></script>
  <script src="js/metisMenu/metisMenu-active.js"></script>
  <!-- morrisjs JS
		============================================ -->
  <script src="js/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/sparkline/jquery.charts-sparkline.js"></script>
  <!-- calendar JS
		============================================ -->
  <script src="js/calendar/moment.min.js"></script>
  <script src="js/calendar/fullcalendar.min.js"></script>
  <script src="js/calendar/fullcalendar-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>
</body>

</html>