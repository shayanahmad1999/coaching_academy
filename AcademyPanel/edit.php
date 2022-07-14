<!doctype html>
<html class="no-js" lang="en">

<?php
require '../AdminPanel/production/process/connection.php';
require 'security.php';

require 'include/head.php'; ?>

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

        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Student Edit</a></li>
                                </ul>
                                <?php

                                $id = $_GET['id'];
                                $update = mysqli_query($connect, "select * from student_record where Students_ID = '$id' ");

                                $edit = mysqli_fetch_array($update);

                                ?>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <form action="process/update.php" method="post" enctype="multipart/form-data">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Name" value="<?php echo $edit['Name']; ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Phone" value="<?php echo $edit['Phone']; ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Telephone" value="<?php echo $edit['Telephone']; ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Address" value="<?php echo $edit['Address']; ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Email" value="<?php echo $edit['Email']; ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                            <input type="password" class="form-control" placeholder="Password" value="<?php echo $edit['Password']; ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" value="<?php echo $edit['Gender']; ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                                            <input type="file" class="form-control">
                                                            <input type="hidden" class="form-control" value="<?php echo $edit['photo'] ?>">
                                                            <img src="../AdminPanel/production/uploads/<?php echo $edit['photo']; ?>" width="60px">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="text-center custom-pro-edt-ds">
                                                            <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                            </button>
                                                            <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
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
        <!-- tab JS
		============================================ -->
        <script src="js/tab.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
</body>

</html>