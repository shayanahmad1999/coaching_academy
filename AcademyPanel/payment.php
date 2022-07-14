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
                            <h4>Payment</h4>
                            <div class="add-product">
                                <!-- <a href="product-edit.html">Add Product</a> -->
                            </div>
                            <table>
                                <tr>
                                    <th>Payment ID</th>
                                    <th>Student Name</th>
                                    <th>Course Name</th>
                                    <th>Academy Name</th>
                                    <th>Action</th>
                                    
                        </tr>
                           <?php 

                            if (isset($_GET['payment_id']) && $_GET['payment_id'] != "" ) {
                                
                                $id = $_GET['payment_id'];
                                $block = $_GET['status'];
                                $Student_id = $_GET['student_id'];
                                $Academy_id = $_GET['academy_id'];
                                $Course_id = $_GET['course_id'];

                                if ($block == 0) {
                                    $query = "update payment set paymentStatus = '1' where Payment_ID = '$id' and Students_ID = '$Student_id' and Academies_ID = '$Academy_id' and Course_ID = '$Course_id'";
                                    $go = mysqli_query($connect,$query);
                                }
                                else{
                                    
                                    $query = "update payment set paymentStatus = '0' where Payment_ID = '$id' and Students_ID = '$Student_id' and Academies_ID = '$Academy_id' and Course_ID = '$Course_id'";
                                    $go = mysqli_query($connect,$query);
                                }
                            }
                                $Academy_id =  $_SESSION['ACID'];
                                $Student_id = $_GET['student_id'];
                                $Academy_id = $_GET['academy_id'];
                                $Course_id = $_GET['course_id'];

                                $query = "select * from payment
                                inner join student_record on payment.Students_ID = student_record.Students_ID
                                inner join courses on payment.Course_ID = courses.Course_ID
                                inner join academy on payment.Academies_ID = academy.Academies_ID
                                where student_record.Students_ID = '$Student_id' and academy.Academies_ID = '$Academy_id' and courses.Course_id = '$Course_id' ";
                                $go = mysqli_query($connect,$query);

                                $a = 1;
                                while ($show = mysqli_fetch_array($go)) {
                                 ?>
                                <tr>
                                    <td><?php echo $a; ?></td>
                                    <td><?php echo $show['Name']; ?></td>
                                    <td><?php echo $show['Course_Name']; ?></td>
                                    <td><?php echo $show['Academy_Name']; ?></td>

                                    <td>
                                        <?php if ($show['paymentStatus'] == 0) { ?>
                                        <a href="payment.php?payment_id=<?php echo $show['Payment_ID'];?>&&status=<?php echo $show['paymentStatus']; ?>&&student_id=<?php echo $show['Students_ID'] ?>&&academy_id=<?php echo $show['Academies_ID'] ?>&&course_id=<?php echo $show['Course_ID'] ?>"><button data-toggle="tooltip" title="Block" class="pd-setting-ed"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                                        
                                        <?php echo $show['Payment']; ?>

                                     <?php } else{ ?>
                                        <a href="payment.php?payment_id=<?php echo $show['Payment_ID'];?>&&status=<?php echo $show['paymentStatus']; ?>&&student_id=<?php echo $show['Students_ID'] ?>&&academy_id=<?php echo $show['Academies_ID'] ?>&&course_id=<?php echo $show['Course_ID'] ?>"><button data-toggle="tooltip" title="Unblock" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                    <?php } ?>
                                    </td>
                                </tr>
                             <?php $a++; } ?>
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